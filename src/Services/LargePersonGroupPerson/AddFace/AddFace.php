<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class AddFace extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = AddFaceOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $largePersonGroupId = $options->parameters()->getLargePersonGroupId();
        $personId = $options->parameters()->getPersonId();
        $url = 'largepersongroups/' . $largePersonGroupId . '/persons/' . $personId . '/persistedfaces';
        return $this->_executeWithOptionsCall($options, $url, 'POST');

//        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId();
//        return $this->_executeWithOptionsCall($options, $url, 'PUT');
//        if (is_null($options)) {
//            $options = new AddFaceOptions();
//        }
//        $this->_options = $options;
//
//        $optionsRequest = [];
//        $optionsRequest['headers'] = $this->_options->headers()->toArray();
//        $optionsRequest['query'] = $this->_options->parameters()->toArray();
//        $optionsRequest['body'] = $this->_options->body()->toJson();
//        $largePersonGroupId = $this->_options->parameters()->getLargePersonGroupId();
//        $personId = $this->_options->parameters()->getPersonId();
//        $url = 'largepersongroups/' . $largePersonGroupId . '/persons/' . $personId . '/persistedfaces';
//        $response = $this->_client->request('POST', $url, $optionsRequest);
//        return $response;
    }

    public function execute($groupId, $personId, $userData, $imageUrl)
    {
        $options = new AddFaceOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
        $options->parameters()->userData($userData);
        $options->body()->url($imageUrl);
        return $this->executeWithOptions($options);
    }
}
