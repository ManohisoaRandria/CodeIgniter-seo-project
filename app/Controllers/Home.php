<?php namespace App\Controllers;

class Home extends BaseController
{
	protected $db;
	public function __construct() {
		$this->db = \Config\Database::connect('default',true);
	}
	public function index()
	{
		return view('front/index');
	}
	public function test()
	{
		echo 'salut';
	}

	//--------------------------------------------------------------------

}
