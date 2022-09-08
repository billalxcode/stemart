<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $cartModel = new \App\Models\CartModel();
        
        $carts_data = $cartModel->findAll();
        $data_post = [];

        foreach ($carts_data as $row) {
            $customer_id = $row['customer_id'];
            
        }
    }
}
