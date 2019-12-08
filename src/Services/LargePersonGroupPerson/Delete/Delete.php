<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureHttpClient;

class Delete {

    /** @var AzureHttpClient $_client */
    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if(is_null($options)) {
            $options = new DeleteOptions();
        }
        $this->_options = $options;

        $optionsRequest = [];
        $optionsRequest['headers'] = $this->_options->headers()->toArray();
        $optionsRequest['query'] = $this->_options->parameters()->toArray();
        $optionsRequest['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId().'/persons/'.$this->_options->parameters()->getPersonId();
        $response = $this->_client->request('DELETE', $url, $optionsRequest);
        return $response;
    }

    public function execute($groupId, $personId)
    {
        $options = new DeleteOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
//        $options->body()->name($name);
//        $options->body()->userData($userData);
        return $this->executeWithOptions($options);
    }
}
