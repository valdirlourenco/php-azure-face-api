<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Get;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class GetBody extends AzureFaceApiBody
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
