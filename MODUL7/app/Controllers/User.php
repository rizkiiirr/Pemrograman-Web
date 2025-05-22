<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function user()
    {
        $user = $this->userModel->findAll();

        $data = [
            'title' => 'Daftar Pengguna',
            'user' => $user
        ];

        return view('user/pengguna', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Pengguna',
            'validation' => session()->getFlashdata('validation')
        ];

        return view('user/createUser', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'username' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Username harus diisi.'
                ]
            ],
            'email' => [
            'rules' => 'required',
            'errors' => [
            'required' => 'Email harus diisi.'
                ]
            ],
            'password' => [
            'rules' => 'required',
            'errors' => [
            'required' => 'Password harus diisi.'
                ]
            ]
            ])) {
                return redirect()->to('/user/create')->withInput()->with('validation', \Config\Services::validation());
            }
            
            $this->userModel->save([
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ]);
            
            session()->setFlashdata('pesan', 'Data Telah Ditambahkan');
            return redirect()->to('/user');
        }
        
        public function delete($id)
        {
            $this->userModel->delete($id);
            return redirect()->to('/user');
        }
        
        public function edit($id)
        {
            $user = $this->userModel->find($id);
            if (!$user) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('User dengan ID ' . $id . ' tidak ditemukan');
            }
            
            $data = [
                'title' => 'Edit Data Pengguna',
                'validation'=> session ('validation')?? \Config\Services::validation(),
                'user' => $this -> userModel -> find($id) 
            ];
            return view('user/editUser', $data);
        }
        
        public function update($id)
        {
            if (!$this->validate([
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username harus diisi.'
                        ]
                    ],
                    
                'email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Email harus diisi.'
                        ]
                    ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Password harus diisi.'
                        ]
                    ]
                    ])) {
                        $validation = \Config\Services::validation();
                        return redirect()->to('/user/edit/' . $id)->withInput()->with('validation', $validation);
                    }
                    
                    $this->userModel->save([
                        'id' => $id,
                        'username' => $this->request->getVar('username'),
                        'email' => $this->request->getVar('email'),
                        'password' => $this->request->getVar('password'),
                    ]);
                    
                    session()->setFlashdata('pesan', 'Data Berhasil Diubah');
                    return redirect()->to('/user');
                }
            }
