<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Book extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this -> bukuModel = new BukuModel();
    }

    public function book()
    {
        $buku = $this->bukuModel->findAll();

        $data = [
            'title' => 'Daftar Buku',
            'buku' => $buku
        ];

        return view('book/buku', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Data Buku',
            'validation' => session()->getFlashdata('validation')

        ];

        return view('book/createBook', $data);
    }
    
    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.'
                    ]
                ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penulis harus diisi.'
                    ]
                ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penerbit harus diisi.'
                    ]
            ],
            'tahunTerbit' => [
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih dari 1800.',
                    'less_than' => 'Tahun terbit harus kurang dari 2024.'
                    ]
                    ]
                    ])) {
                        return redirect()->to('/buku/create')->withInput()->with('validation', \Config\Services::validation());
                    }
                    
                    $this->bukuModel->save([
                        'judul' => $this->request->getVar('judul'),
                        'penulis' => $this->request->getVar('penulis'),
                        'penerbit' => $this->request->getVar('penerbit'),
                        'tahun_terbit' => $this->request->getVar('tahunTerbit')
                    ]);
                    
                    session()->setFlashdata('pesan', 'Data Telah Ditambahkan');
                    return redirect()->to('/buku');
                }


    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku');
    }
    
    public function edit($id)
    {
        $buku = $this->bukuModel->find($id);
        
        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan');
        }
        
        $data = [
            'title' => 'Edit Data Buku',
            'validation'=> session ('validation')?? \Config\Services::validation(),
            'buku' => $this -> bukuModel -> find($id) 
            
        ];
        return view('book/editBook', $data);
    }
    
    public function update($id)
    {
        if (!$this->validate([
        'judul' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Judul harus diisi.'
            ]
        ],
        'penulis' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penulis harus diisi.'
            ]
        ],
        'penerbit' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Penerbit harus diisi.'
            ]
        ],
        'tahunTerbit' => [
            'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
            'errors' => [
                'required' => 'Tahun terbit harus diisi.',
                'integer' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun terbit harus lebih dari 1800.',
                'less_than' => 'Tahun terbit harus kurang dari 2024.'
            ]
        ]
        ])) {
            
            $validation = \Config\Services::validation();
            return redirect()->to('/buku/edit/' . $id)->withInput()->with('validation', $validation);
        }
        
        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahunTerbit')
        ]);
        
        session()->setFlashdata('pesan', 'Data Berhasil Diubah');
        return redirect()->to('/buku');
    }
}
