<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'John Doe',
                'email'      => 'john.doe@example.com',
                'phone'      => '1234567890',
                'role'       => 'Admin',
                'dob'        => '1990-01-01',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Jane Smith',
                'email'      => 'jane.smith@example.com',
                'phone'      => '9876543210',
                'role'       => 'User',
                'dob'        => '1992-05-15',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
