<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Get;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class GetHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}