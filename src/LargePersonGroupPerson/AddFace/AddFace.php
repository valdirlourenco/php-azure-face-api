<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace;

class AddFace {

    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if(is_null($options)) {
            $options = new AddFaceOptions();
        }
        $this->_options = $options;

        $optionsRequest = [];
        $optionsRequest['headers'] = $this->_options->headers()->toArray();
        $optionsRequest['query'] = $this->_options->parameters()->toArray();
        $optionsRequest['body'] = $this->_options->body()->toJson();
        $largePersonGroupId = $this->_options->parameters()->getLargePersonGroupId();
        $personId = $this->_options->parameters()->getPersonId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId.'/persistedfaces';
        $response = $this->_client->request('POST', $url, $optionsRequest);
        return $response;
    }

    public function execute($groupId, $personId, $userData, $imageUrl)
    {
        $options = new AddFaceOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
        $options->parameters()->userData($userData);
        $options->body()->url($imageUrl);
        return $this->executeWithOptions($options);
    }
}
