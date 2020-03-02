<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Update;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class UpdateOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = UpdateParameters::class;
        $this->_headersClass = UpdateHeaders::class;
        $this->_bodyClass = UpdateBody::class;
    }
}
