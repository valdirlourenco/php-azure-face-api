<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;
use SmartDog23\AzureFaceApi\Utilities\AzureHttpClient;

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
        return $this->executeWithOptionsCall($options, $url, 'PUT');
    }

    public function execute($groupId, $description, $userData = null)
    {
        $options = new CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->body()->name($description);
        $options->body()->userData($userData);
        return $this->executeWithOptions($options);
    }

}
