<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\UpdateFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class UpdateFace extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = UpdateFaceOptions::class;
    }

    public function executeWithOptions(UpdateFaceOptions $options = null)
    {
        $largePersonGroupId = $options->parameters()->getLargePersonGroupId();
        $personId = $options->parameters()->getPersonId();
        $persistedFaceId = $options->parameters()->getPersistedFaceId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId.'/persistedfaces/'.$persistedFaceId;
        return $this->_executeWithOptionsCall($options, $url, 'PATCH');
    }

    public function execute($groupId, $personId, $persistedFaceId, $userData)
    {
        $options = new UpdateFaceOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setPersonId($personId);
        $options->parameters()->setPersistedFaceId($persistedFaceId);
        $options->body()->setUserData($userData);
        return $this->executeWithOptions($options);
    }
}
