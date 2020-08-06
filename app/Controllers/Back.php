<?php

namespace App\Controllers;

use \Exception;
use CodeIgniter\Controller;
use DateTime;
use DateTimeZone;

class Back extends Controller
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect('default', true);
        helper(['url', 'form']);
        session_start();
        helper('filesystem');
    }
    public function index()
    {
        if (isset($_SESSION['user'])) {
            $userModel = model('ArticleModel', true, $this->db);
            $categs = $userModel->getAllCategorie();
            $data['categs'] = $categs;
            return view('back/index', $data);
        } else {
            return view('back/login');
        }
    }
    public function formatNumber(string $seq, int $ordre)
    {
      if (strlen(trim($seq)) > $ordre) {
        throw new Exception("Format impossible !");
      }
      $ret = "";
      for ($i = 0; $i < $ordre - strlen(trim($seq)); $i++) {
        $ret .= "0";
      }
      return $ret . $seq;
    }
    public function insertCategorieArticle()
    {
	
		$data=$this->request->getPost();

      
        $query = $this->db->query('select nextval(\'seq_categoriearticle\') as id');
          $id = $this->formatNumber($query->getResult()[0]->id.'',4);
      
        $data['id']=$id;
        $data['etat']=1;

      $userModel = model('ArticleModel', true, $this->db);
       $userModel->addCategorie($data);
       return redirect()->to(base_url() . '/back');
	}
    public function insertArticle()
    {
        
        $data = $this->request->getPost();
        $date=new DateTime('now',new DateTimeZone('Africa/Nairobi'));
        $query = $this->db->query('select nextval(\'seq_article\') as id');
          $id = $this->formatNumber($query->getResult()[0]->id.'',4);
      
        $data['id']=$id;
        $data['datepublication']=$date->format("d-m-Y H:i:s");
        $data['sponsorise']=0;
        $data['etat']=1;
        $data['nbcomments']=0;
        $data['vue']=0;
    //   var_dump($data);
      $userModel = model('ArticleModel', true, $this->db);
       $userModel->addArticle($data);
       return redirect()->to(base_url() . '/back');
        // $validated = $this->validate([
        //     'photo' => [
        //         'uploaded[photo]',
        //         'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]',
        //         'max_size[photo,4096]',
        //     ],
        // ]);
        // if ($validated) {
        //     $client = \Config\Services::curlrequest();
        //     $photo = $this->request->getFile('photo');
        //    // var_dump($data['base64']);
        //     $url = 'https://image-host-ngam.herokuapp.com/uploadLink';
           
        //     // // Collection object
        //     $data2 = [
        //         'img' =>$data['base64']
        //     ];
        //     $response= $client->request('POST', $url,['json' => $data2]);
        //     var_dump($response);
        //     // var_dump(write_file(base_url() . '/public/back/uploads', $photo, 'r+'));
        //     // var_dump($photo->store(base_url(). './public/back/uploads'));
        //     // echo ROOTPATH;
        // }
    }
    public function logout()
    {
        if (isset($_SESSION['user'])) $_SESSION['user'] = null;
        session_destroy();
        return redirect()->to(base_url() . '/back');
        //   return view('back/login');
    }
    public function login()
    {
        $data = $this->request->getPost();
        $userModel = model('UsersModel', true, $this->db);
        $test = $userModel->login($data);
        if (!is_array($test)) {
            if ($test) {
                $_SESSION['user'] = 'true';
                return redirect()->to(base_url() . '/back');
            }
        }
        //    return view('back/login');
    }
}
