<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class DeleteBody extends AzureFaceApiBody
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
