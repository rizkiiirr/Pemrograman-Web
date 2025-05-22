<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function login()
    {
        return view('login/login');
    }

    public function prosesLogin()
    {
        $session = session();
        $model = new LoginModel();

        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)
                      ->where('email', $email)
                      ->where('password', $password)
                      ->first();

        if ($user) {
                $session->set([
                    'id'       => $user['id'],
                    'username' => $user['username'],
                    'email'    => $user['email'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/buku'); // sesuaikan halaman tujuan
            } else {
            return redirect()->to('/login?error=Username,%20email%20atau%20password%20salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
