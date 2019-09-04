<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create;

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
        return $this->execute();
    }

    public function execute()
    {
        echo 'create the person';
        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId().'/persons';
        dump($this->_client);
        $response = $this->_client->request('POST', $url, $options);
        echo 'a1';
        dump($options);
        dump(json_decode($response->getContents(), true));
//        dump(json_decode($response->getContents(), true));
        echo 'a2';
//        $responseBody = $response->getBody();
        return $response;
    }
}
