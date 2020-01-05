<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class CreateOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = CreateParameters::class;
        $this->_headersClass = CreateHeaders::class;
        $this->_bodyClass = CreateBody::class;
    }
}
