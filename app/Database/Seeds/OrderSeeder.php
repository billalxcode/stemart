<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orderModel = new \App\models\OrderModel();
        $productModel = new \App\Models\ProductModel();
        $customerModel = new \App\Models\UserModel();

        $product_data = $productModel->select('id')->findAll();
        $customer_data = $customerModel->select('id')->findAll();

        for ($i = 0; $i < 10; $i++) {
            $product_index = random_int(0, count($product_data) - 1);
            $customer_index = random_int(0, count($customer_data) - 1);

            $product_id = $product_data[$product_index]['id'];
            $customer_id = $customer_data[$customer_index]['id'];

            $data = [
                'id_produk' => $product_id,
                'kode_invoice' => $orderModel->generate_invoice(),
                'customer_id' => $customer_id,
                'total_order' => 2,
                'total_discount' => null,
                'status' => 'accept',
                'isnew' => 'yes'
            ];

            $orderModel->save($data);
        }
    }
}
