<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $table = $this->db->table('users');

        for ($i = 0; $i < random_int(100, 1000); $i++) {
            $faker = Factory::create('id_ID');
            $data = [
                'email' => $faker->email(),
                'username' => $faker->userName(),
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'refresh_token' => null,
                'password' => password_hash('user1234', PASSWORD_BCRYPT),
                'status' => 'active',
                'role' => 'customer'
            ];

            $table->insert($data);
        }
    }
}
