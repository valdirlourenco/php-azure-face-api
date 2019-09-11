<?php 

namespace SmartDog23\AzureFaceApi\Face\Identify;

class Identify {

    private $_client;
    private $_options;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if(is_null($options)) {
            $options = new IdentifyOptions();
        }
        $this->_options = $options;

        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $response = $this->_client->request('POST', 'identify', $options);
        return $response;
    }

    public function execute($faceIds, $largePersonGroupId, $personGroupId = null, $maxNumOfCandidatesReturned = 10)
    {
        $options = new IdentifyOptions();
        $options->body()->faceIds($faceIds);
        $options->body()->largePersonGroupId($largePersonGroupId);
        $options->body()->personGroupId($personGroupId);
        $options->body()->maxNumOfCandidatesReturned($maxNumOfCandidatesReturned);
        return $this->executeWithOptions($options);
    }
}