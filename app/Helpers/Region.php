<?php
// Helper ini dalam tahap pengembangan

class Region {
    protected $ch;
    protected $base_url = "";

    function __construct()
    {
        $this->base_url = 'http://dev.farizdotid.com/api';
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_HEADER, array(
            "Host: dev.farizdotid.com",
            "User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:101.0) Gecko/20100101 Firefox/101.0",
            "Accept: application/json,*/*;q=0.8",
            "Accept-Language: en-US,en;q=0.5",
            "Accept-Encoding: gzip, deflate",
            "Connection: keep-alive",
            "Cookie: _ga=GA1.2.293964184.1661833831; _gid=GA1.2.1695805077.1661833831",
            "Upgrade-Insecure-Requests: 1",
        ));
    }

    public function get_provinces() {
        $url = $this->base_url . '/daerahindonesia/provinsi';
        curl_setopt($this->ch, CURLOPT_URL, $url);
        $response = curl_exec($this->ch);
        curl_close($this->ch);
        echo $response['provinsi'];
    }
}

$region = new Region();
$data = $region->get_provinces();
echo $data;

?>