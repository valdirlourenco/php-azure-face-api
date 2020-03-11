<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\GetFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class GetFace  extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = GetFaceOptions::class;
    }

    public function executeWithOptions(GetFaceOptions $options = null)
    {
        $largePersonGroupId = $options->parameters()->getLargePersonGroupId();
        $personId = $options->parameters()->getPersonId();
        $persistedFaceId = $options->parameters()->getPersistedFaceId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId.'/persistedfaces/'.$persistedFaceId;
        return $this->_executeWithOptionsCall($options, $url, 'GET');
    }

    public function execute($groupId, $personId, $persistedFaceId)
    {
        $options = new GetFaceOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setPersonId($personId);
        $options->parameters()->setPersistedFaceId($persistedFaceId);
        return $this->executeWithOptions($options);
    }
}
