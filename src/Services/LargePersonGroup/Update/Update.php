<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Update;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Update extends AzureFaceApiService
{

    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = UpdateOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId();
        return parent::_executeWithOptionsCall($options, $url, 'PATCH');
    }

    public function execute($groupId, $name, $userData = null)
    {
        $options = new UpdateOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->body()->setName($name);
        $options->body()->setUserData($userData);
        return $this->executeWithOptions($options);
    }

}
