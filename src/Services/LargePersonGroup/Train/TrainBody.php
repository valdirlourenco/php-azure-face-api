<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class TrainBody extends AzureFaceApiBody
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
