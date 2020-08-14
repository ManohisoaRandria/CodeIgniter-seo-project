<?php

namespace App\Controllers;

use \Exception;
use CodeIgniter\Controller;
use DateTime;
use DateTimeZone;
use App\Entities\UploadBody;

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
            $dataform = $this->request->getPost();

            $userModel = model('ArticleModel', true, $this->db);
            if (is_array($dataform) && isset($dataform['article'])) {
                $one = $userModel->getOne($dataform['article']);
                $data['update'] = $one;
            }

            $categs = $userModel->getAllCategorie();
            $data['categs'] = $categs;
            $allarticle = $userModel->getAll();
            $data['allarticle'] = $allarticle;
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

        $data = $this->request->getPost();


        $query = $this->db->query('select nextval(\'seq_categoriearticle\') as id');
        $id = $this->formatNumber($query->getResult()[0]->id . '', 4);

        $data['id'] = $id;
        $data['etat'] = 1;

        $userModel = model('ArticleModel', true, $this->db);
        $userModel->addCategorie($data);
        return redirect()->to(base_url() . '/back');
    }

    public function insertArticle()
    {
        // $client = \Config\Services::curlrequest();
        $validated = $this->validate([
            'photo' => [
                'uploaded[photo]',
                'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[photo,4096]',
            ],
        ]);


        if ($validated) {
            $photo = $this->request->getFile('photo');
            if ($photo->isValid() && !$photo->hasMoved()) {
                $data = $this->request->getPost();
                //upload
                $body = new UploadBody('qneigjp6', '784818918978326', $data['base64'], 'img/tprojo');
                $curl_handle = curl_init();
                curl_setopt($curl_handle, CURLOPT_URL, 'https://api.cloudinary.com/v1_1/Manohisoa/image/upload');
                curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_handle, CURLOPT_POST, 1);
                curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($body));
                curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json'
                ]);
                $buffer = curl_exec($curl_handle);
                curl_close($curl_handle);
                $response = json_decode($buffer);


                //savedb
                $date = new DateTime('now', new DateTimeZone('Africa/Nairobi'));
                $query = $this->db->query('select nextval(\'seq_article\') as id');
                $id = $this->formatNumber($query->getResult()[0]->id . '', 4);

                $data['id'] = $id;
                $data['datepublication'] = $date->format("d-m-Y H:i:s");
                $data['sponsorise'] = 0;
                $data['etat'] = 1;
                $data['nbcomments'] = 0;
                $data['photo'] = $response->secure_url;
                $data['vue'] = 0;

                $userModel = model('ArticleModel', true, $this->db);
                $userModel->addArticle($data);
                return redirect()->to(base_url() . '/back');
            }
        }
    }
    public function updateArticle()
    {

        $validated = $this->validate([
            'photo' => [
                'uploaded[photo]',
                'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[photo,4096]',
            ],
        ]);
        if ($validated) {
            $photo = $this->request->getFile('photo');
            if ($photo->isValid() && !$photo->hasMoved()) {
                $data = $this->request->getPost();
                //upload
                $body = new UploadBody('qneigjp6', '784818918978326', $data['base64'], 'img/tprojo');
                $curl_handle = curl_init();
                curl_setopt($curl_handle, CURLOPT_URL, 'https://api.cloudinary.com/v1_1/Manohisoa/image/upload');
                curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_handle, CURLOPT_POST, 1);
                curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($body));
                curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json'
                ]);
                $buffer = curl_exec($curl_handle);
                curl_close($curl_handle);
                $response = json_decode($buffer);

                $data['photo'] = $response->secure_url;
                $userModel = model('ArticleModel', true, $this->db);
                $userModel->updateArticle($data);
                return redirect()->to(base_url() . '/back');
            }
        } else {
            $data = $this->request->getPost();
            $userModel = model('ArticleModel', true, $this->db);
            $userModel->updateArticle($data);
            return redirect()->to(base_url() . '/back');
        }
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
            } else {
                $data2['error'] = 'verifier votre pseudo et mot de passe';
                return view('back/login', $data2);
            }
        } else {
            $data2['error'] = 'verifier votre pseudo et mot de passe';
            return view('back/login', $data2);
        }
        //    return view('back/login');
    }
}
