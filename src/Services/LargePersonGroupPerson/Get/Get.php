<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get;

use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Get  extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = GetOptions::class;
    }

    public function executeWithOptions(GetOptions $options = null)
    {
        $largePersonGroupId = $options->parameters()->getLargePersonGroupId();
        $personId = $options->parameters()->getPersonId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons/'.$personId;
        return $this->_executeWithOptionsCall($options, $url, 'GET');
    }

    public function execute($groupId, $personId)
    {
        $options = new GetOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setPersonId($personId);
        return $this->executeWithOptions($options);
    }
}
