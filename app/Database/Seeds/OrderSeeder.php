<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orderModel = new \App\models\OrderModel();
        $cartModel = new \App\Models\CartModel();
        
        $carts_data = $cartModel->findAll();
        $data_post = [];

        foreach ($carts_data as $row) {
            $customer_id = $row['customer_id'];
            $item_id = $row['id'];

            $orderModel->save([
                'item_id' => $item_id,
                'invoice' => $orderModel->generate_invoice(),
                'customer_id' => $customer_id,
                'total_order' => 1,
                'total_discount' => null,
                'subtotal' => $row['price']
            ]);
        }
    }
}
