<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\GetTrainingStatus;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class GetTrainingStatusOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = GetTrainingStatusParameters::class;
        $this->_headersClass = GetTrainingStatusHeaders::class;
        $this->_bodyClass = GetTrainingStatusBody::class;
    }

    /** @return GetTrainingStatusParameters */
    public function parameters()
    {
        return parent::parameters();
    }

    /** @return GetTrainingStatusHeaders */
    public function headers()
    {
        return parent::headers();
    }

    /** @return GetTrainingStatusBody */
    public function body()
    {
        return parent::body();
    }
}
