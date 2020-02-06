<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Get;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Get extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = GetOptions::class;
    }

    public function executeWithOptions(GetOptions $options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId();
        return $this->_executeWithOptionsCall($options, $url, 'GET');
    }

    public function execute($groupId, $returnRecognitionModel = false)
    {
        $options = new GetOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setReturnRecognitionModel($returnRecognitionModel);
        return $this->executeWithOptions($options);
    }
}
