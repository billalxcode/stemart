<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'orders';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'item_id', 'invoice', 'customer_id', 'total_order', 
        'total_discount', 'subtotal'
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

    public function get_all_orders() {
        $cartModel = new \App\Models\CartModel();
        $userModel = new \App\Models\UserModel();
        $productModel = new \App\Models\ProductModel();

        $data_temp = $this->select('*')->findAll();
        $data_fix = [];
        foreach ($data_temp as $row) {
            $cart_data = $cartModel->where('id', $row['item_id'])->findAll();
            $carts_data = [];
            foreach ($cart_data as $cart) {
                $product_id = $cart['product_id'];
                $products = $productModel->where('id', $product_id)->findAll();
                $cart['products'] = $products;
                array_push($carts_data, $cart);
            }

            $row['carts'] = $cart_data;
            array_push($data_fix, $row);
        }

        die(var_dump($data_fix));
    }
}
