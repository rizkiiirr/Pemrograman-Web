<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    public function getProfile()
    {
        return [
            'name' => 'Muhammad Rizki Ramadhan',
            'nim' => '2310817310008',
            'prodi' => 'Teknologi Informasi',
            'hobbies' => 'Membaca, Traveling',
            'skills' => 'Public Speaking, Java',
            'mottos' => 'Ikhtiar dan Berdoa'
        ];
    }

    public function getHome()
    {
        return [
            'name' => 'Muhammad Rizki Ramadhan',
            'nim' => '2310817310008'
        ];
    }
}
