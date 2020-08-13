<?php
use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $returnType = '\App\Entities\Users';
    protected $allowedFields = [
        'nom', 'pseudo','mdp'
    ];
    protected $validationRules    = [
        'nom'     => 'required|is_unique[users.nom]',
        'pseudo'        => 'required|is_unique[users.pseudo]',
    ];
    protected $validationMessages = [
        'nom'        => [
            'is_unique' => 'found dumplicate name'
        ],
        'pseudo'        => [
            'is_unique' => 'found duplicate pseudo'
        ]
    ];
    public function addUser($data){
        $data['mdp']=password_hash($data['mdp'], PASSWORD_BCRYPT);
        $this->protect(false);
        if ($this->insert($data) === false) {
            var_dump($this->errors());
            $this->protect(true);
		}else{
            $this->protect(true);
        }
    }
    public function login($data){
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pseudo' => 'required',
            'mdp' => 'required'
        ],
        [   // Errors
            'pseudo' => [
                'required' => 'All accounts must have usernames provided',
            ],
            'mdp' => [
                'required' => 'Your password is too short. You want to get hacked?'
            ]
        ]);
        if(!$validation->run($data)){
           return $validation->getErrors();
        }else{
            $user=$this->where('pseudo', $data['pseudo'])
            ->findAll();
            if(isset($user) && count($user)!=0){
                if(password_verify($data['mdp'],$user[0]->getMdp())){
                    return true;
                 }else{
                    return false;
                 }
            }else{
                return false;
            }
        }
       
    }
}