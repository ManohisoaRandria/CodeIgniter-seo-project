<?php

namespace App\Controllers;

use DateTime;
use DateTimeZone;
use \Exception;
class Home extends BaseController
{
	protected $db;
	public function __construct()
	{
		$this->db = \Config\Database::connect('default', true);
		helper(['url', 'form']); 
	}
	public function index($id=null)
	{
		$userModel = model('ArticleModel', true, $this->db);
		$recent=array();
		$getbcat=array();
		if($id!=null){
			$getbcat= $userModel->getByCategorie($id);
			$data['getbcat']=$getbcat;
			$data['h1']=ucfirst($id);
		}
			$recent= $userModel->getRecent();
		
		
		$categs=$userModel->getAllCategorie();
		$popular=$userModel->getPopular();
		// $reportage=$userModel->getReportage();
		$mostview=$userModel->getMostView();
		// var_dump($users);
		// $query = $this->db->query('select nextval(\'seq_users\') as id');
		// $id = $query->getResult()[0]->id;
	
		// $user->setNom("sdfsdf");
		// $userModel->save($user);
		// $users = $userModel->findAll();
		$data['recent']=$recent;
		$data['popular']=$popular;
		$data['categs']=$categs;
		// $data['reportage']=$reportage;
		$data['mostview']=$mostview;
		return view('front/index',$data);
	}
	public function back(){
		return view('back/index');
	}
	public function oneArticle($id){
		$userModel = model('ArticleModel', true, $this->db);
		$one=$userModel->getOne($id);
		$comments=$userModel->getComments($id);
		$userModel->increaseView($id);

		$data['one']=$one;
		$data['comments']=$comments;
		return view('front/image-post',$data);
	}
	public function commenting($id)
    {
	
		$data=$this->request->getPost();

        $date=new DateTime('now',new DateTimeZone('Africa/Nairobi'));
        $query = $this->db->query('select nextval(\'seq_commentaire\') as id');
          $id2 = $this->formatNumber($query->getResult()[0]->id.'',4);
      
        $data['id']=$id2;
        $data['datepublication']=$date->format("d-m-Y H:i:s");
        $data['article']=$id;

      $userModel = model('ArticleModel', true, $this->db);
       $userModel->addComments($data);
       return redirect()->to(base_url() . $data['url']);
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
	public function test()
	{
		//  $query = $this->db->query('select nextval(\'seq_users\') as id');
		// $id = $query->getResult()[0]->id;
		// $pwd=password_hash('1234',PASSWORD_BCRYPT);
		// $this->db->simpleQuery("insert into users values('USR000".$id."','Admin','back','".$pwd."')");
		// var_dump($doubledash);
		// // $data = $this->request->getPost();
		//    //var_dump($this->request->getPost());
		//    $userModel = model('ArticleModel', true, $this->db);
		//    // $userModel->addUser($data);
		   
		//    $test=$userModel->getPopular();
		//    var_dump($test);
		// //   $data['error']=$test;
		// // echo 'salut';
		// // return view('front/index',$data);
	}

	//--------------------------------------------------------------------

}
