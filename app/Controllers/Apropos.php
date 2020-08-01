<?php namespace App\Controllers;

use CodeIgniter\Controller;
class Apropos extends Controller
{
    public function index()
    {
       return view('front/about');
    }
}