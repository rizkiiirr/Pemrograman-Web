<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class prak_601 extends BaseController
{

     public function home()
     {

      $model = new ProfileModel();
      $home = $model->getHome(); 

        $data = [
            'title' => 'Beranda',
            'name' => $home['name'],
            'nim' => $home['nim']
        ];

        echo view('home', $data);
     }

     public function profile()
    {
        $model = new ProfileModel();
        $profile = $model->getProfile(); 

        $data = [
            'title' => 'Profile',
            'name' => $profile['name'],
            'nim' => $profile['nim'],
            'prodi' => $profile['prodi'],
            'hobbies' => $profile['hobbies'],
            'skills' => $profile['skills'],
            'mottos' => $profile['mottos']
        ];

        return view('prak_601/profile', $data);
    }
}