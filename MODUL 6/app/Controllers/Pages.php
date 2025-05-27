<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // public function index()
    // {
    //     echo 'Hello Worlds!';
    // }

    public function index()
     {
         return view('home');
     }

     public function home()
     {
      $data = [
        'title' => 'Home'
      ];
        echo view('home', $data);
     }

     public function about()
     {
      $data = [
        'title' => 'About Me'
      ];
        echo view('pages/about', $data);
     }
}