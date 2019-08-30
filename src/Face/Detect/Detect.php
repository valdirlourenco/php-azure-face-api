<?php 

namespace SmartDog23\AzureFaceApi\Face\Detect;

class Detect {

    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        if(is_null($options)) {
            $options = new DetectOptions();
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
        $options['body'] = json_encode($this->_options->body()->toArray());
        $response = $this->_client->request('POST', 'detect', $options);
        dump($response->getBody()->getContents());
    }
}