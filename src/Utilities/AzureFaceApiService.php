<?php

namespace SmartDog23\AzureFaceApi\Utilities;

class AzureFaceApiService
{
    protected $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }
}
