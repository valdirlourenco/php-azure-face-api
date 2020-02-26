<?php

namespace SmartDog23\AzureFaceApi\Utilities;

class AzureFaceApiService
{
    /** @var AzureHttpClient */
    protected $_client;
    protected $_optionsClass;
    protected $_url;
    protected $_method;

    private $_options;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    protected function _executeWithOptionsCall($options, $url, $method)
    {
        $optionsRequest = [];
        $optionsRequest['headers'] = $options->headers()->toArray();
        $optionsRequest['query'] = $options->parameters()->toArray();
        $optionsRequest['body'] = $options->body()->toJson();
        if($options->body()->isMultipart()) {
            $optionsRequest['body'] = $options->body()->getMultipart();
        }
        $response = $this->_client->request($method, $url, $optionsRequest);
        return $response;
    }
}
