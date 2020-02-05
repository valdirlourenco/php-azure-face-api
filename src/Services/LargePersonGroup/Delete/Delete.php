<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Delete extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = DeleteOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId();
        return $this->_executeWithOptionsCall($options, $url, 'DELETE');
    }

    public function execute($groupId)
    {
        $options = new DeleteOptions();
        $options->parameters()->largePersonGroupId($groupId);
        return $this->executeWithOptions($options);
    }
}
