<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Delete extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = DeleteOptions::class;
    }

    public function executeWithOptions(DeleteOptions $options = null)
    {
        $url = 'largepersongroups/' . $options->parameters()->_getLargePersonGroupId() . '/persons/' . $options->parameters()->_getPersonId();
        return $this->_executeWithOptionsCall($options, $url, 'DELETE');
    }

    public function execute($groupId, $personId)
    {
        $options = new DeleteOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($personId);
        return $this->executeWithOptions($options);
    }
}
