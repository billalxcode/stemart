<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categoryModel = new \App\Models\CategoryModel();

        $data = [
            'Alat pertanian', 'Elektronik', 'Makanan ringan', 'Komputer', 'Laptop',
            'Komponen Komputer', 'Peralatan Elektronik', 'Pupuk kimia', 'Pupuk padat',
            'Perangkat Lunak', 'Perangkat Keras'
        ];

        foreach ($data as $row) {
            $mdata = [
                'category_name' => $row,
                'category_slug' => $categoryModel->slugify($row)
            ];

            $categoryModel->insert($mdata);
        }
    }
}
