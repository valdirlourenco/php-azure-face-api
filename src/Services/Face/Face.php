<?php

namespace SmartDog23\AzureFaceApi\Services\Face;

use SmartDog23\AzureFaceApi\Services\Face\Detect\Detect;
use SmartDog23\AzureFaceApi\Services\Face\Identify\Identify;

class Face {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function detect()
    {
        return new Detect($this->_client);
    }

    public function findSimilar()
    {

    }

    public function group()
    {

    }

    public function identify()
    {
        return new Identify($this->_client);
    }

    public function verify()
    {

    }

}
