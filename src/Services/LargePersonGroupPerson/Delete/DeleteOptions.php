<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class DeleteOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = DeleteParameters::class;
        $this->_headersClass = DeleteHeaders::class;
        $this->_bodyClass = DeleteBody::class;
    }
}
