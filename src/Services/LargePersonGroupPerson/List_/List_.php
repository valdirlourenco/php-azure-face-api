<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class List_  extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = ListOptions::class;
    }

    public function executeWithOptions(ListOptions $options = null)
    {
        $largePersonGroupId = $options->parameters()->getLargePersonGroupId();
        $url = 'largepersongroups/'.$largePersonGroupId.'/persons';
        return $this->_executeWithOptionsCall($options, $url, 'GET');
    }

    public function execute($groupId)
    {
        $options = new ListOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        return $this->executeWithOptions($options);
    }
}
