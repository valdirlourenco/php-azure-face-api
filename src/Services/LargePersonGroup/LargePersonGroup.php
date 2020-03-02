<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup;

use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Get\Get;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\Create;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Delete\Delete;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\GetTrainingStatus\GetTrainingStatus;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train\Train;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\List_\List_;

class LargePersonGroup {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function create()
    {
        return new Create($this->_client);
    }

    public function delete()
    {
        return new Delete($this->_client);
    }

    public function get()
    {
        return new Get($this->_client);
    }

    public function getTrainingStatus()
    {
        return new GetTrainingStatus($this->_client);
    }

    public function list()
    {
        return new List_($this->_client);
    }

    public function train()
    {
        return new Train($this->_client);
    }

    public function update()
    {

    }
}
