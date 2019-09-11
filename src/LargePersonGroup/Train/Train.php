<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Train;

class Train {

    private $_client;
    private $_options;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {

        if(is_null($options)) {
            $options = new TrainOptions();
        }
        $this->_options = $options;

        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId().'/train';
        $response = $this->_client->request('POST', $url, $options);
        return $response;
    }

    public function execute($largePersonGroupId)
    {
        $options = new TrainOptions();
        $options->parameters()->largePersonGroupId($largePersonGroupId);
        return $this->executeWithOptions($options);
    }
}