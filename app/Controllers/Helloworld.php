<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Helloworld extends Controller
{
    public function index()
    {
        
        echo $this->request->getGet('test');
        return redirect()->to('home');
    }
}