<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Train;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class TrainHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}