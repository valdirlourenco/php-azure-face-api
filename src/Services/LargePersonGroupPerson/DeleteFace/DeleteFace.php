<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class DeleteFace extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = DeleteFaceOptions::class;
    }

    public function executeWithOptions(DeleteFaceOptions $options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId() . '/persons/' . $options->parameters()->getPersonId() . '/persistedfaces/' . $options->parameters()->getPersistedFaceId();
        return $this->_executeWithOptionsCall($options, $url, 'DELETE');
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
