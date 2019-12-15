<?php

namespace SmartDog23\AzureFaceApi\Utilities;

class Service
{
    protected $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }
}
