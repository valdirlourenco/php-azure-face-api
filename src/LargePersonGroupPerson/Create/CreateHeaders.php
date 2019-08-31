<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class CreateHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}