<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class AddFaceOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = AddFaceParameters::class;
        $this->_headersClass = AddFaceHeaders::class;
        $this->_bodyClass = AddFaceBody::class;
    }
}
