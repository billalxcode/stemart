<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RegionSeeder extends Seeder
{
    protected $base_url = 'http://dev.farizdotid.com/api/daerahindonesia/';

    function get_all_province() {
        $service = \Config\Services::curlrequest();
        // $response = $service->request('GET', $this->base_url . 'provinsi', [
        //     'headers' => [
        //         'Accept'     => 'application/json'
        //     ]
        // ]);
        $response = $service->get($this->base_url . 'provinsi', [
            'headers' => [
                'Accept'     => 'application/json'
            ]
        ]);

        
        return $response->getBody();
    }

    function get_cities($province_id) {
        $service = \Config\Services::curlrequest();
        $response = $service->get($this->base_url . 'kota?id_provinsi=' . $province_id, [
            'headers' => [
                'Accept'      => 'application/json'
            ]
        ]);

        return $response->getBody();
    }

    public function get_districts($city_id) {
        // http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3214
        $service = \Config\Services::curlrequest();
        $response = $service->get($this->base_url . 'kecamatan?id_kota=' . $city_id, [
            'headers' => [
                'Accept'      => 'application/json'
            ]
        ]);

        return $response->getBody();
    }

    function get_villages($district_id) {
        $service = \Config\Services::curlrequest();

        $response = $service->get($this->base_url . 'kelurahan?id_kecamatan=' . $district_id, [
            'headers' => [
                'Accept'    => 'application/json'
            ]
        ]);

        return $response->getBody();
    }

    public function run()
    {
        // $regions = $this->db->table('regions');
        
        // $data_provinsi = $this->get_all_province();
        // $data_provinsi = json_decode($data_provinsi, true);

        // $data_provinsi_real = [];
        // foreach ($data_provinsi['provinsi'] as $provinsi) {
        //     array_push($data_provinsi_real, [
        //         'code' => $provinsi['id'],
        //         'name' => $provinsi['nama'],
        //         'type' => 'provinsi'
        //     ]);
        // }
        // // $regions->insertBatch($data_provinsi_real);

        // $data_kota_real = [];
        // foreach ($data_provinsi_real as $provinsi) {
        //     $data_kota = $this->get_cities($provinsi['code']);
        //     $data_kota = json_decode($data_kota, true);
            
        //     foreach ($data_kota['kota_kabupaten'] as $kota) {
        //         array_push($data_kota_real, [
        //             'code' => $kota['id'],
        //             'name' => $kota['nama'],
        //             'type' => 'kota',
        //             'parent' => $provinsi['code']
        //         ]);
        //     }
        // }

        // // $regions->insertBatch($data_kota_real);

        // $data_kecamatan_real = [];
        // foreach ($data_kota_real as $kota) {
        //     $data_kecamatan = $this->get_districts($kota['code']);
        //     $data_kecamatan = json_decode($data_kecamatan, true);

        //     foreach ($data_kecamatan['kecamatan'] as $kecamatan) {
        //         array_push($data_kecamatan_real, [
        //             'code' => $kecamatan['id'],
        //             'name' => $kecamatan['nama'],
        //             'type' => 'kec',
        //             'parent' => $kota['code']
        //         ]);
        //     }
        // }

        // // $regions->insertBatch($data_kecamatan_real);

        // $data_kelurahan_real = [];
        // foreach ($data_kecamatan_real as $kecamatan) {
        //     $data_kelurahan = $this->get_villages($kecamatan['code']);
        //     $data_kelurahan = json_decode($data_kelurahan);

        //     foreach ($data_kelurahan['kelurahan'] as $kelurahan) {
        //         array_push($data_kelurahan_real, [
        //             'code' => $kelurahan['id'],
        //             'name' => $kelurahan['nama'],
        //             'type' => 'desa', 
        //             'parent' => $kecamatan['code']
        //         ]);
        //     }
        // }
        
        // // $regions->insertBatch($data_kelurahan_real);

        // $data_batch = array_merge(
        //     $data_provinsi_real,
        //     $data_kota_real,
        //     $data_kecamatan_real,
        //     $data_kelurahan_real
        // );

        // $regions->insertBatch($data_batch);
    }
}
