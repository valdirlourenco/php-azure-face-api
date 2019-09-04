<?php

namespace SmartDog23\AzureFaceApi;
use GuzzleHttp\Client;
use GuzzleHttp;

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
        echo 'azure request';
        try {
            $headers = &$options['headers'];
            $headers['Ocp-Apim-Subscription-Key'] = $this->_key;
            dump($uri);
            $this->_response = $this->_client->request($method, $uri, $options);
            $responseBody = $this->_response->getBody();
            dump('aqui 002');
            dump($this->_response);
            dump($this->_response->getStatusCode());
            dump($responseBody);
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBody = $response->getStatusCode();
            $responseBodyAsString = $response->getBody()->getContents();
//            dump('end error 1');
//            dump($responseBody);
//            dump('end error 2');
//            dump($responseBodyAsString);
//            dump('end error');
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }

        return $this->_response->getBody();
    }

    public function getBody()
    {
        return $this->_response->getBody();
    }

}
