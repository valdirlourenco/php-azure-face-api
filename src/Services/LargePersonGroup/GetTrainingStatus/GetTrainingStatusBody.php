<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\GetTrainingStatus;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class GetTrainingStatusBody extends AzureFaceApiBody
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
