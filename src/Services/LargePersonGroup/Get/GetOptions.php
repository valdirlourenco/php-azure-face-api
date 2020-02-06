<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Get;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class GetOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = GetParameters::class;
        $this->_headersClass = GetHeaders::class;
        $this->_bodyClass = GetBody::class;
    }

    /** @return GetParameters */
    public function parameters()
    {
        return parent::parameters();
    }

    /** @return GetHeaders */
    public function headers()
    {
        return parent::headers();
    }

    /** @return GetBody */
    public function body()
    {
        return parent::body();
    }
}
