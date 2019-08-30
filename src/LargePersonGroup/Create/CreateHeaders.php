<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Create;

class CreateHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}