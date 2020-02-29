<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create;

use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Create extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = CreateOptions::class;
    }

    public function executeWithOptions($options = null)
    {

        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId() . '/persons';
        return $this->_executeWithOptionsCall($options, $url, 'POST');
    }

    public function execute($groupId, $name, $userData = null)
    {
        $options = new CreateOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->body()->setName($name);
        $options->body()->setUserData($userData);
        return $this->executeWithOptions($options);
    }
}
