<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class DetectOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = DetectParameters::class;
        $this->_headersClass = DetectHeaders::class;
        $this->_bodyClass = DetectBody::class;
    }
}
