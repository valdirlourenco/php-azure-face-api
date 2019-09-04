<?php

namespace SmartDog23\AzureFaceApi;
use GuzzleHttp\Client;
use GuzzleHttp;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7;

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
        try {
            $headers = &$options['headers'];
            $headers['Ocp-Apim-Subscription-Key'] = $this->_key;
            dump($uri);
            $response = $this->_client->request($method, $uri, $options);
        } catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
        } catch(ConnectException $e) {
            echo $e->getMessage();
            $response = 'ConnectException';
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
            $response = 'RequestException';
        }
        return $response;
    }

    public function getBody()
    {
        return $this->_response->getBody();
    }

}
