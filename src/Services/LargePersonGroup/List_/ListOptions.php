<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class ListOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = ListParameters::class;
        $this->_headersClass = ListHeaders::class;
        $this->_bodyClass = ListBody::class;
    }
}
