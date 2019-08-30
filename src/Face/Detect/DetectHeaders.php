<?php

namespace SmartDog23\AzureFaceApi\Face\Detect;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class DetectHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}