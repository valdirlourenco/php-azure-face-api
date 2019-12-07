<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup;

use SmartDog23\AzureFaceApi\LargePersonGroup\Create\Create;
use SmartDog23\AzureFaceApi\LargePersonGroup\Train\Train;

class LargePersonGroup {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function create($options = null)
    {
        return new Create($this->_client);
    }

    public function delete()
    {

    }

    public function get()
    {

    }

    public function getTrainingStatus()
    {

    }

    public function list()
    {

    }

    public function train($options = null)
    {
        return new Train($this->_client);
    }

    public function update()
    {

    }
}
