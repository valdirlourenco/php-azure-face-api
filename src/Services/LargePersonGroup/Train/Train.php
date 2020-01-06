<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train;

use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Train extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = CreateOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId() . '/train';
        return $this->_executeWithOptionsCall($options, $url, 'POST');
    }

    public function execute($largePersonGroupId)
    {
        $options = new TrainOptions();
        $options->parameters()->largePersonGroupId($largePersonGroupId);
        return $this->executeWithOptions($options);
    }
}
