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
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
        $options->parameters()->userData($userData);
        $options->body()->url($imageUrl);
        return $this->executeWithOptions($options);
    }
}
