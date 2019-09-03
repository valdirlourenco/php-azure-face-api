<?php

namespace SmartDog23\AzureFaceApi;
use GuzzleHttp\Client;

class AzureHttpClient {

    private $_client;
    private $_key;
    private $_response;

    public function __construct($options, $key)
    {
        $this->_client = new Client($options);
        $this->_key = $key;
    }

    public function request($method, $uri, $options)
    {
        $headers = &$options['headers'];
        $headers['Ocp-Apim-Subscription-Key'] = $this->_key;
        $this->_response = $this->_client->request($method, $uri, $options);
        $responseBody = $this->_response->getBody();
        dump($responseBody);
//        return $this->_response;
    }

    public function getBody()
    {
        return $this->_response->getBody();
    }

}
