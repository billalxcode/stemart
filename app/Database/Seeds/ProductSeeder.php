<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        $productModel = new \App\Models\ProductModel();

        $data_products = [
            [
                'product_name' => 'Arang Sekam',
                'product_slug' => $productModel->slugify('Arang Sekam'),
                'product_price' => 45000,
                'product_summary' => $faker->text(),
                'product_stock' => random_int(4, 100),
                'product_thumb' => base_url('uploads/images/1662247108_6f6a7da6ca7c21558840.jpg'),
                'product_discount' => 0,
                'product_location' => 0,
                'product_sales' => random_int(1, 10),
                'product_status' => 'active'
            ],
            [
                'product_name' => 'Komsah (Kompos Rasah)',
                'product_slug' => $productModel->slugify('Komsah - Kompos Basah'),
                'product_price' => 10000,
                'product_summary' => $faker->text(),
                'product_stock' => random_int(4, 100),
                'product_thumb' => base_url('uploads/images/1662247108_6f6a7da6ca7c21558840.jpg'),
                'product_discount' => 0,
                'product_location' => 0,
                'product_sales' => random_int(1, 10),
                'product_status' => 'active'
            ],
            [
                'product_name' => 'ManTAPH+F POC (Pupuk Organik Cair Fungisida)',
                'product_slug' => $productModel->slugify('Mantaphf'),
                'product_price' => 15000,
                'product_summary' => $faker->text(),
                'product_stock' => random_int(4, 100),
                'product_thumb' => base_url('uploads/images/1662247108_6f6a7da6ca7c21558840.jpg'),
                'product_discount' => 0,
                'product_location' => 0,
                'product_sales' => random_int(1, 10),
                'product_status' => 'active'
            ],
            [
                'product_name' => 'ManTAPH+B POC (Pupuk Organik Cair Biopestisida)',
                'product_slug' => $productModel->slugify('Mantaphb'),
                'product_price' => 25000,
                'product_summary' => $faker->text(),
                'product_stock' => random_int(4, 100),
                'product_thumb' => base_url('uploads/images/1662247108_6f6a7da6ca7c21558840.jpg'),
                'product_discount' => 0,
                'product_location' => 0,
                'product_sales' => random_int(1, 10),
                'product_status' => 'active'
            ]
        ];

        $productModel->insertBatch($data_products);
    }
}
