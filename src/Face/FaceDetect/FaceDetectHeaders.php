<?php 

namespace SmartDog23\AzureFaceApi\Face\FaceDetect;

use SmartDog23\AzureFaceApi\AzureFaceApiHeaders;

class FaceDetectHeaders extends AzureFaceApiHeaders {

    public function __construct()
    {
        $this->contentType(parent::CONTENT_TYPE_JSON);
    }
}