<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Update;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class UpdateOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = UpdateParameters::class;
        $this->_headersClass = UpdateHeaders::class;
        $this->_bodyClass = UpdateBody::class;
    }

    /** @return UpdateParameters */
    public function parameters()
    {
        return parent::parameters();
    }

    /** @return UpdateHeaders */
    public function headers()
    {
        return parent::headers();
    }

    /** @return UpdateBody */
    public function body()
    {
        return parent::body();
    }
}
