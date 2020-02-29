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
        $url = 'largepersongroups/' . $options->parameters()->getLargePersonGroupId() . '/persons/' . $options->parameters()->getPersonId();
        return $this->_executeWithOptionsCall($options, $url, 'DELETE');
    }

    public function execute($groupId, $personId)
    {
        $options = new DeleteOptions();
        $options->parameters()->setLargePersonGroupId($groupId);
        $options->parameters()->setPersonId($personId);
        return $this->executeWithOptions($options);
    }
}
