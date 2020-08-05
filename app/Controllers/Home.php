<?php

namespace App\Controllers;

class Home extends BaseController
{
	protected $db;
	public function __construct()
	{
		$this->db = \Config\Database::connect('default', true);
		helper(['url', 'form']); 
	}
	public function index()
	{
		$userModel = model('ArticleModel', true, $this->db);
		$recent=array();
		if($this->request->getGet('ref')!=null){
			$recent= $userModel->getByCategorie($this->request->getGet('ref'));
		}else{
			$recent= $userModel->getRecent();
		}
		
		$categs=$userModel->getAllCategorie();
		$popular=$userModel->getPopular();
		$reportage=$userModel->getReportage();
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
		$data['reportage']=$reportage;
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
	public function test()
	{
		
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
