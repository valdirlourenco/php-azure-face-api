<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace;

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
    }

    public function execute($groupId, $personId, $userData, $imageUrl)
    {
        $options = new AddFaceOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setPersonId($personId);
        $options->parameters()->setUserData($userData);
        $options->body()->setUrl($imageUrl);
        return $this->executeWithOptions($options);
    }
}
