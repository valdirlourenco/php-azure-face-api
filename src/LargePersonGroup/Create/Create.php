<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Create;

class Create {

    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        if(is_null($options)) {
            $options = new CreateOptions();
        }
        $this->_options = $options;
        $this->_client = $client;
        $this->execute();
    }

    public function execute()
    {
        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId();
        $response = $this->_client->request('PUT', $url, $options);
        return $response;
    }
}