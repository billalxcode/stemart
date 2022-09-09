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
        'id_produk', 'kode_invoice', 'customer_id', 'total_order', 
        'total_discount', 'status', 'isnew'
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

    public function valid_id($order_id) {
        $data = $this->select('id,kode_invoice')->where('id', $order_id)->first();
        return $data;
    }

    public function get_all_orders() {
        $userModel = new \App\Models\UserModel();
        $productModel = new \App\Models\ProductModel();

        $data_temp = $this->select('*')->findAll();
        $data_fix = [];
        foreach ($data_temp as $row) {
            $product_data = $productModel->where('id', $row['id_produk'])->findAll();

            $customer_data = $userModel->get_name_by_id($row['customer_id']);

            $row['customers'] = $customer_data;
            $row['products'] = $product_data;

            array_push($data_fix, $row);
        }
        // echo json_encode($data_fix[0]);
        // die();

        return $data_fix;
    }

    public function generate_invoice() {
        $alphabets = 'abcdefghijklmnopqrstuvwyxz123456789';
        $res = '';
        for ($i = 0; $i < 8; $i++) {
            $randx = random_int(0, strlen($alphabets) - 1);
            $res .= $alphabets[$randx];
        }
        
        $res_upper = strtoupper($res);
        return $res_upper;
    }
}
