<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Back extends Controller
{
    protected $db;
	public function __construct()
	{
		$this->db = \Config\Database::connect('default', true);
        helper(['url', 'form']); 
        session_start();
	}
    public function index()
    {
        if(isset($_SESSION['user'])){
            return view('back/index');
        }else{
            return view('back/login');
        }
       
    }
    public function logout()
    {
      if (isset($_SESSION['user'])) $_SESSION['user'] = null;
      session_destroy();
      return redirect()->to(base_url().'/back');
    //   return view('back/login');
     }
    public function login()
    {
        $data=$this->request->getPost();
        $userModel = model('UsersModel', true, $this->db);
        $test=$userModel->login($data);
        if(!is_array($test)){
            if($test){
                $_SESSION['user']='true';
                return redirect()->to(base_url().'/back');
            }
        }
    //    return view('back/login');
    }
}