<?php

namespace SmartDog23\AzureFaceApi\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApi;

class Detect
{

    private $_client;
    private $_options;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function executeWithOptions($options = null)
    {
        if (is_null($options)) {
            $options = new DetectOptions();
        }
        $this->_options = $options;

        $options = [];
        $options['headers'] = $this->_options->headers()->toArray();
        $options['query'] = $this->_options->parameters()->toArray();
        $options['body'] = $this->_options->body()->toJson();
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
