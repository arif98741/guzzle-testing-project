<?php

use GuzzleHttp\Exception\GuzzleException;

class RequestClass
{

    private $base_url = 'https://football-prediction-api.p.rapidapi.com/api/v2/';

    private $header;

    private $method = 'GET';

    private $response;

    public static $instance;

    /**
     * @return static
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {

            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * @throws GuzzleException
     */
    public function send($suffix, array $header = null, array $query = null, $verify = false, $method = 'GET')
    {
        $client = new GuzzleHttp\Client(['base_uri' => $this->base_url, 'verify' => $verify]);
        $response = $client->request($method, $suffix, [
            'headers' => $header,
            'query' => $query
        ]);
        $this->header = $header;
        $this->method = $method;

        $x = $response->getBody();
        $this->response = json_decode($x->getContents());
        return $this;
    }


}