<?php

namespace App\Models;

use CodeIgniter\I18n\Time;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email', 'username', 'firstname',
        'lastname', 'phone', 'address', 'refresh_token',
        'password', 'status', 'role'
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

    function generate_token() {
        $alphabets = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789!@#$%^&*_+-=";

        $res = '';
        $randx = random_int(30, 100);
        for ($i = 0; $i < $randx; $i++) {
            $randy = random_int(0, strlen($alphabets) - 1);
            $res .= $alphabets[$randy];
        }

        $hashes = hash('sha256', $res);
        return "token:" . $hashes;
    }

    public function valid_id($id) {
        $data = $this->select('id,role')->where('id', $id)->first();
        return $data;
    }
    
    public function valid_token($token) {
        $data = $this->select('id,role')->where('refresh_token', $token)->first();
        return $data;
    }

    public function valid_email($email) {
        $data = $this->where('email', $email)->orderBy('id')->first();
        return $data;
    }
    
    public function update_refresh_token($id) {
        $token = $this->generate_token();
        $this->update($id, 
        [
            'refresh_token' => $token
            ]
        );
        
        return $token;
    }
    
    public function update_refresh_token_null($id) {
        $this->update($id, [
            'refresh_token' => null
        ]);
        
        return true;
    }

    public function find_all_by_id($userid) {
        $data = $this->where("id", $userid)->first();

        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $data['fullname'] = $firstname . ' ' . $lastname;
        
        $updated_at = new Time($data['updated_at']);
        $data['logged_in'] = $updated_at->humanize();
        return $data;
    }

    public function get_all_customer() {
        $customer_data = $this->select('id,email,username,firstname,lastname,phone,address,status')->where('role', 'customer')->orderBy('id')->findAll();

        $customer_data_real = [];
        foreach ($customer_data as $customer) {
            if ($customer['firstname'] && $customer['lastname']) {
                $customer['fullname'] = $customer['firstname'] . ' ' . $customer['lastname'];
            } else if ($customer['firstname'] && !$customer['lastname']) {
                $customer['fullname'] = $customer['firstname'];
            }

            if ($customer['address'] && $customer['address'] >= 20) {
                $customer['short_address'] = substr($customer['address'], 0, 20) . '...';
            } else {
                $customer['short_address'] = $customer['address'];
            }

            array_push($customer_data_real, $customer);
        }
        return $customer_data_real;
    }
}
