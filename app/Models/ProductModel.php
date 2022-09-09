<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'product_name', 'product_slug', 'product_price',
        'product_summary', 'product_stock', 'product_category',
        'product_thumb', 'product_discount', 'product_location',
        'product_status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function valid_id($product_id) {
        $data = $this->select('product_name')->where('id', $product_id)->first();
        return $data;
    }

    public static function slugify($text, string $divider = '-')
    {
        // Thanks to https://stackoverflow.com/a/2955878
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        
        // trim
        $text = trim($text, $divider);
        
        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);
        
        // lowercase
        $text = strtolower($text);
        
        if (empty($text)) {
            return 'n-a';
        }
        
        return $text;
    }

    public function get_all_products() {
        helper('number_helper');
        $categoryModel = new \App\Models\CategoryModel();

        $data_products = $this->orderBy('product_name')->findAll();
        $data_products_real = [];
        foreach ($data_products as $row) {
            $rupiah_converted = rupiah($row['product_price']);

            $product_category = $row['product_category'];

            $category_data = $categoryModel->get_category_name($product_category);
            $row['product_category'] = $category_data;
            $row['product_rupiah'] = $rupiah_converted;

            array_push($data_products_real, $row);
        }
        
        return $data_products_real;
    }
}
