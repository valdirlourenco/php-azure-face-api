<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class DeleteFaceOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = DeleteFaceParameters::class;
        $this->_headersClass = DeleteFaceHeaders::class;
        $this->_bodyClass = DeleteFaceBody::class;
    }
}
