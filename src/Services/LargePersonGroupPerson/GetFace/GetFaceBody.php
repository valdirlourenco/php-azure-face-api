<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\GetFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class GetFaceBody  extends AzureFaceApiBody
{
    public function __construct()
    {
        $this->castArray = [];
    }
}
