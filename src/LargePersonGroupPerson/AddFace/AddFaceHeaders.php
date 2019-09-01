<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class AddFaceHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}