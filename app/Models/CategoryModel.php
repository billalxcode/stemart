<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'category';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'category_name', 'category_slug', 'parent_id'
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

    public function valid_id($catid) {
        $data = $this->select('category_name,category_slug')->where('id', $catid)->first();
        return $data;
    }

    public function get_category_name($id) {
        $data = $this->select("category_name")->where('id', $id)->first();
        return $data['category_name'];
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

    public function generate_slugify() {
        $alphabets = 'abcdefghijklmnopqrstuvwxyz1234567890';
        $randx = random_int(30, 100);
        $text = '';
        for ($i = 0; $i < $randx; $i++) {
            $randy = random_int(0, strlen($alphabets) - 1);
            $text .= $alphabets[$randy];
        }

        $hashes = hash('sha256', $text);
        return $hashes;
    }
}
