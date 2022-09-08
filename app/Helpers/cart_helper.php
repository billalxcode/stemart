<?php

class CartHelper {
    protected $session;

    protected $cart_contents = [];
    
    function __construct()
    {
        $this->session = \Config\Services::session();

        $this->cart_contents = [];
    }

    public function set($key, $data) {
        if (!array_key_exists($key, $this->cart_contents)) {
            $this->cart_contents[$key] = $data;
            return true;
        } else {
            return $this->update($key, $data);
        }
    }

    public function update($key, $data) {
        if (array_key_exists($key, $this->cart_contents)) {
            $this->cart_contents[$key] = $data;
            return false;
        } else {
            return false;
        }
    }

    public function set_data($data) {
        if (is_array($data)) {
            foreach ($data as $key => $val) {
                $this->set($key, $val);
            }
            return true;
        } else {
            return false;
        }
    }

    public function delete_data() {
        $this->cart_contents = [];
        $this->destroy();
        return true;
    }

    public function save() {
        $this->session->setTempdata('carts', $this->cart_contents);
        return true;
    }

    public function destroy() {
        $this->cart_contents = [];
        if ($this->session->getTempdata()) {
            $this->session->removeTempdata('carts');
            return true;
        } else {
            return false;
        }
    }
}