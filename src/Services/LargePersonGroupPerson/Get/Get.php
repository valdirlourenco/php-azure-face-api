<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get;

class Get {

    private $_client;
    private $_options;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if(is_null($options)) {
            $options = new GetOptions();
        }
        $this->_options = $options;

        $optionsRequest = [];
        $optionsRequest['headers'] = $this->_options->headers()->toArray();
        $optionsRequest['query'] = $this->_options->parameters()->toArray();
        $optionsRequest['body'] = $this->_options->body()->toJson();
        $largePersonGroupId = $this->_options->parameters()->getLargePersonGroupId();
        $personId = $this->_options->parameters()->getPersonId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId;
        $response = $this->_client->request('GET', $url, $optionsRequest);
        return $response;
    }

    public function execute($groupId, $personId)
    {
        $options = new GetOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
        return $this->executeWithOptions($options);
    }
}
