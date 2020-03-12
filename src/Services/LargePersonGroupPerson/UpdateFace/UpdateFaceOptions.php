<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\UpdateFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class UpdateFaceOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = UpdateFaceParameters::class;
        $this->_headersClass = UpdateFaceHeaders::class;
        $this->_bodyClass = UpdateFaceBody::class;
    }

    /** @return UpdateFaceParameters */
    public function parameters()
    {
        return parent::parameters();
    }

    /** @return UpdateFaceHeaders */
    public function headers()
    {
        return parent::headers();
    }

    /** @return UpdateFaceBody */
    public function body()
    {
        return parent::body();
    }
}
