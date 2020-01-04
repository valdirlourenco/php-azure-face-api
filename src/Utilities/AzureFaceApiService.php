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
//        if (is_null($options)) {
//            $options = new $this->_optionsClass;
//        }



        $optionsRequest = [];
        $optionsRequest['headers'] = $options->headers()->toArray();
        $optionsRequest['query'] = $options->parameters()->toArray();
        $optionsRequest['body'] = $options->body()->toJson();
//        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId();
        $response = $this->_client->request($method, $url, $optionsRequest);
        return $response;
    }
}
