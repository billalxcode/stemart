<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        $data = [
            [
                'email' => 'admin@admin.com',
                'username' => 'admin',
                'firstname' => 'Super',
                'lastname' => "User",
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'refresh_token' => null,
                'password' => password_hash('admin1234', PASSWORD_BCRYPT),
                'status' => 'active',
                'role' => 'admin'
            ]
        ];

        for ($i = 0; $i < 5; $i++) {
            $faker2 = Factory::create("id_ID");
            $data[][] = [
                'email' => $faker2->email,
                'username' => $faker2->userName,
                'firstname' => $faker2->firstName,
                'lastname' => $faker2->lastName,
                'phone' => $faker2->phoneNumber,
                'address' => $faker2->address,
                'refresh_token' => null,
                'password' => password_hash('user1234', PASSWORD_BCRYPT),
                'status' => 'active',
                'role'=> 'customer'
            ];
        }
    }
}
