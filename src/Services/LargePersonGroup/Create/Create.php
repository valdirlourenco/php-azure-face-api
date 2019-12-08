<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create;

use SmartDog23\AzureFaceApi\Utilities\AzureHttpClient;

class Create {

    /** @var AzureHttpClient */
    private $_client;
    private $_options;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if(is_null($options)) {
            $options = new CreateOptions();
        }
        $this->_options = $options;

        $optionsRequest = [];
        $optionsRequest['headers'] = $this->_options->headers()->toArray();
        $optionsRequest['query'] = $this->_options->parameters()->toArray();
        $optionsRequest['body'] = $this->_options->body()->toJson();
        $url = 'largepersongroups/'.$this->_options->parameters()->getLargePersonGroupId();
        $response = $this->_client->request('PUT', $url, $optionsRequest);
        return $response;
    }

    public function execute($groupId, $description, $userData = null)
    {
        $options = new CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->body()->name($description);
        $options->body()->userData($userData);
        return $this->executeWithOptions($options);
    }

}
