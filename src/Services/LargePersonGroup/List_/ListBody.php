<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class ListBody  extends AzureFaceApiBody
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
