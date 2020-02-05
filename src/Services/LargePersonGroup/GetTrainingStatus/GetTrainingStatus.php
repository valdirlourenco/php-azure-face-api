<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\GetTrainingStatus;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class GetTrainingStatus extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = GetTrainingStatusOptions::class;
    }

    public function executeWithOptions(GetTrainingStatusOptions $options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId().'/training';
        return $this->_executeWithOptionsCall($options, $url, 'GET');
    }

    public function execute($groupId)
    {
        $options = new GetTrainingStatusOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        return $this->executeWithOptions($options);
    }
}
