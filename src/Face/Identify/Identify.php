<?php 

namespace SmartDog23\AzureFaceApi\Face\Identify;

class Identify {

    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        if(is_null($options)) {
            $options = new IdentifyOptions();
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
        $response = $this->_client->request('POST', 'identify', $options);
        dump($response->getBody()->getContents());
    }
}