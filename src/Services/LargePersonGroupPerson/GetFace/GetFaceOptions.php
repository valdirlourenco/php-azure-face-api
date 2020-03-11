<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\GetFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class GetFaceOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = GetFaceParameters::class;
        $this->_headersClass = GetFaceHeaders::class;
        $this->_bodyClass = GetFaceBody::class;
    }

    /** @return GetFaceParameters */
    public function parameters()
    {
        return parent::parameters();
    }

    /** @return GetFaceHeaders */
    public function headers()
    {
        return parent::headers();
    }

    /** @return GetFaceBody */
    public function body()
    {
        return parent::body();
    }
}
