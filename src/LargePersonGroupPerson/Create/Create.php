<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create;

use GuzzleHttp\Psr7\Response;

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
    }

    public function execute()
    {
        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId().'/persons';
        $response = $this->_client->request('POST', $url, $options);
        if($response instanceof Response) {
            return json_decode($response->getBody()->getContents(), true);
        } else {
            return null;
        }
    }
}
