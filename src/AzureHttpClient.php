<?php

namespace SmartDog23\AzureFaceApi;
use GuzzleHttp\Client;

class AzureHttpClient {
    
    private $_client;
    private $_key;

    public function __construct($options, $key)
    {
        $this->_client = new Client($options);
        $this->key = $key;
    }

    public function request($method, $uri, $options)
    {
        $headers = &$options['headers'];
        $headers['Ocp-Apim-Subscription-Key'] = $this->key;
        dump($options);
        return $this->_client->request($method, $uri, $options);
    }

}