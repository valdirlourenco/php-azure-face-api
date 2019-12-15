<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\Service;

class Detect extends Service
{
    public function __construct($client)
    {
        parent::__construct($client);
    }

    public function executeWithOptions($options = null)
    {
        if (is_null($options)) {
            $options = new DetectOptions();
        }
//        $this->_options = $options;

        $optionsRequest = [];
        $optionsRequest['headers'] = $options->headers()->toArray();
        $optionsRequest['query'] = $options->parameters()->toArray();
        $optionsRequest['body'] = $options->body()->toJson();
        $response = $this->_client->request('POST', 'detect', $options);
        return $response;
    }

    public function execute($url, $returnFaceId = true, $returnFaceLandmarks = false, $returnFaceAttributes = '', $recognitionModel = AzureFaceApi::RECOGNITION_02, $returnRecognitionModel = false, $detectionModel = AzureFaceApi::DETECTION_02)
    {
        $options = new DetectOptions();
        $options->parameters()->returnFaceId($returnFaceId);
        $options->parameters()->returnFaceLandmarks($returnFaceLandmarks);
        $options->parameters()->returnFaceAttributes($returnFaceAttributes);
        $options->parameters()->recognitionModel($recognitionModel);
        $options->parameters()->returnRecognitionModel($returnRecognitionModel);
        $options->parameters()->detectionModel($detectionModel);
        $options->body()->url($url);
        return $this->executeWithOptions($options);
    }
}
