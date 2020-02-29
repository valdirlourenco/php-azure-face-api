<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create;

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
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId();
        return parent::_executeWithOptionsCall($options, $url, 'PUT');
    }

    public function execute($groupId, $description, $userData = null)
    {
        $options = new CreateOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->body()->setName($description);
        $options->body()->setUserData($userData);
        return $this->executeWithOptions($options);
    }

}
