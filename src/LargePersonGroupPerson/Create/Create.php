<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create;

use GuzzleHttp\Psr7\Response;
use SmartDog23\AzureFaceApi\AzureHttpClient;

class Create {

    /** @var AzureHttpClient $_client */
    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        $this->_client = $client;
    }

    public function call($options = null)
    {
        if(is_null($options)) {
            $options = new CreateOptions();
        }
        $this->_options = $options;

        $optionsRequest = [];
        $optionsRequest['headers'] = $this->_options->headers()->toArray();
        $optionsRequest['query'] = $this->_options->parameters()->toArray();
        $optionsRequest['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId().'/persons';
        $response = $this->_client->request('POST', $url, $optionsRequest);
        return $response;
    }

    public function execute($groupId, $name, $userData)
    {
        $options = new CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->body()->name($name);
        $options->body()->userData($userData);
        return $this->call($options);
    }
}
