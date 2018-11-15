<?php
namespace App\Http\Service\Http;

class Client
{
    /**
     * @param String $url
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function request(String $url)
    {
        $client = new \GuzzleHttp\Client();
        return $client->get($url);
    }
}
