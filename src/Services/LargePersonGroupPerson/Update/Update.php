<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Update;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Update extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = UpdateOptions::class;
    }

    public function executeWithOptions(UpdateOptions $options = null)
    {
        $largePersonGroupId = $options->parameters()->getLargePersonGroupId();
        $personId = $options->parameters()->getPersonId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId;
        return $this->_executeWithOptionsCall($options, $url, 'PATCH');
    }

    public function execute($groupId, $personId, $name, $userData)
    {
        $options = new UpdateOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setPersonId($personId);
        $options->body()->setName($name);
        $options->body()->setUserData($userData);
        return $this->executeWithOptions($options);
    }
}
