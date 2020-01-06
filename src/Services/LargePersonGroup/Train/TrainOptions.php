<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class TrainOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = TrainParameters::class;
        $this->_headersClass = TrainHeaders::class;
        $this->_bodyClass = TrainBody::class;
    }
}
