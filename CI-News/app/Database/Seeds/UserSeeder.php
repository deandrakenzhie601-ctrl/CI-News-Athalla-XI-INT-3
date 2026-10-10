<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username'      => 'admin',
            'email'         => 'admin@gmail.com',
            // Enkripsi password menggunakan BCRYPT bawaan PHP
            'password_hash' => password_hash('admin123', PASSWORD_DEFAULT),
            'fullname'      => 'Kenzhie',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);
    }
}