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
        return $this->execute();
    }

    public function execute()
    {
        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $largePersonGroupId = $this->_options->parameters()->getLargePersonGroupId();
//        dump('00001');
//        dump($largePersonGroupId);
        $personId = $this->_options->parameters()->getPersonId();
        dump('00002');
        dd($personId);
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId.'/persistedfaces';
//        ?userData][&targetFace][&detectionModel]
        $response = $this->_client->request('POST', $url, $options);
        return $response;
    }
}
