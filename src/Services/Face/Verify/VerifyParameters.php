<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class VerifyParameters extends AzureFaceApiParameters
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
