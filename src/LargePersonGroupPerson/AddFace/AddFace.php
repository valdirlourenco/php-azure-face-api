<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace;

class AddFace {

    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        if(is_null($options)) {
            $options = new AddFaceOptions();
        }
        $this->_options = $options;
        $this->_client = $client;
    }

    public function execute()
    {
        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $largePersonGroupId = $this->_options->parameters()->getLargePersonGroupId();
        $personId = $this->_options->parameters()->getPersonId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId.'/persistedfaces';
        $response = $this->_client->request('POST', $url, $options);
        return $response;
    }
}
