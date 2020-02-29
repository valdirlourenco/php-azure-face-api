<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Detect extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = DetectOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $url = 'detect';
        return $this->_executeWithOptionsCall($options, $url, 'POST');
    }

    public function execute($url, $returnFaceId = true, $returnFaceLandmarks = false, $returnFaceAttributes = '', $recognitionModel = AzureFaceApi::RECOGNITION_02, $returnRecognitionModel = false, $detectionModel = AzureFaceApi::DETECTION_02)
    {
        $options = new DetectOptions();
        $options->parameters()->setReturnFaceId($returnFaceId);
        $options->parameters()->setReturnFaceLandmarks($returnFaceLandmarks);
        $options->parameters()->setReturnFaceAttributes($returnFaceAttributes);
        $options->parameters()->setRecognitionModel($recognitionModel);
        $options->parameters()->setReturnRecognitionModel($returnRecognitionModel);
        $options->parameters()->setDetectionModel($detectionModel);
        $options->body()->setUrl($url);
        return $this->executeWithOptions($options);
    }
}
