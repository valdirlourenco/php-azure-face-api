<?php

namespace SmartDog23\AzureFaceApi;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

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
        } catch (ClientException $e) {
            $response = $e;
        } catch(ConnectException $e) {
            echo $e->getMessage();
            $response = $e;
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }
        $azureResponse = new AzureResponse($response);
        return $azureResponse;
    }
}
