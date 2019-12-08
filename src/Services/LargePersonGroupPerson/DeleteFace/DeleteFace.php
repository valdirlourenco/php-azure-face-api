<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace;

use SmartDog23\AzureFaceApi\Utilities\AzureHttpClient;

class DeleteFace {

    /** @var AzureHttpClient $_client */
    private $_client;

    public function __construct($client, $options = null)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if(is_null($options)) {
            $options = new DeleteFaceOptions();
        }

        $optionsRequest = [];
        $optionsRequest['headers'] = $options->headers()->toArray();
        $optionsRequest['query'] = $options->parameters()->toArray();
        $optionsRequest['body'] = $options->body()->toJson();
        $url = 'largepersongroups/'.$options->parameters()->getLargePersonGroupId().'/persons/'.$options->parameters()->getPersonId().'/persistedfaces/'.$options->parameters()->getPersistedFaceId();
        $response = $this->_client->request('DELETE', $url, $optionsRequest);
        return $response;
    }

    public function execute($groupId, $personId, $persistedFaceId)
    {
        $options = new DeleteFaceOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
        $options->parameters()->persistedFaceId($persistedFaceId);
        return $this->executeWithOptions($options);
    }
}
