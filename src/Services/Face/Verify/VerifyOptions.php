<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class VerifyOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = VerifyParameters::class;
        $this->_headersClass = VerifyHeaders::class;
        $this->_bodyClass = VerifyBody::class;
    }
}
