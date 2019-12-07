<?php

namespace SmartDog23\AzureFaceApi\Face;

use SmartDog23\AzureFaceApi\Face\Detect\Detect;
use SmartDog23\AzureFaceApi\Face\Identify\Identify;

class Face {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function detect($options = null)
    {
        return new Detect($this->_client);
    }

    public function findSimilar()
    {

    }

    public function group()
    {

    }

    public function identify($options = null)
    {
        return new Identify($this->_client);
    }

    public function verify()
    {

    }

}
