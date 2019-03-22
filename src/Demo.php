<?php
/**
 * Created by PhpStorm.
 * User: zfy
 * Date: 2019/3/23
 * Time: 1:14
 */
require '../vendor/autoload.php';
use GuzzleHttp\Client;

class Demo
{
    public function get()
    {
        $client = new GuzzleHttp\Client(['base_uri' => "https://www.baidu.com"]);
        $response = $client->request('GET');
        $code = $response->getStatusCode();
        var_dump($code);
    }
}