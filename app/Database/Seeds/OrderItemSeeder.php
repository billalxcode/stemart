<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    function random_item($array) {
        $length = count($array);
        die(var_dump($array));
        $randx = random_int(0, $length - 1);
        return $array[$randx];
    }

    public function run()
    {
        $productModel = new \App\Models\ProductModel($this->db);
        $userModel = new \App\Models\UserModel($this->db);

        $customer_data = $userModel->select('id')->where('role', 'customer')->findAll();

        $product_data = $productModel->select('id,product_price')->findAll();
        
        $order_item = $this->db->table('order_item');

        for ($i = 0; $i < random_int(5, 20); $i++) {
            $product = $this->random_item($product_data);
            die(var_dump($product));

            $data_post = [
                'customer_id' => $this->random_item($customer_data)['id'],
                'product_id' => $product['id'],
                'quantity' => random_int(4, 10),
                'price' => $product['product_price'],
                'discount' => null
            ];

            $order_item->insert($data_post);
        }

        echo "All in done";
    }
}
