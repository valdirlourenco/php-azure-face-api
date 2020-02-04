<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class GetOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = GetParameters::class;
        $this->_headersClass = GetHeaders::class;
        $this->_bodyClass = GetBody::class;
    }
}
