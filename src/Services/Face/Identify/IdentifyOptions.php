<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Identify;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class IdentifyOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = IdentifyParameters::class;
        $this->_headersClass = IdentifyHeaders::class;
        $this->_bodyClass = IdentifyBody::class;
    }
}
