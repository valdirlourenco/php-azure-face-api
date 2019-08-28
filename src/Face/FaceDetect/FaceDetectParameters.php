<?php 

namespace SmartDog23\AzureFaceApi\Face\FaceDetect;

use SmartDog23\AzureFaceApi\AzureFaceApi;

class FaceDetectParameters {

    private $_returnFaceId;
    private $_returnFaceLandmarks;
    private $_returnFaceAttributes;
    private $_recognitionModel;
    private $_returnRecognitionModel;
    private $_detectionModel;

    public function __construct()
    {
        $this->_returnFaceId = 'true';
        $this->_returnFaceLandmarks = 'false';
        $this->_returnFaceAttributes = '';
        $this->_recognitionModel = AzureFaceApi::RECOGNITION_02;
        $this->_returnRecognitionModel = 'false';
        $this->_detectionModel = AzureFaceApi::DETECTION_02;
    }

    public function returnFaceId($value)
    {
        $this->_returnFaceId = $value;
    }

    public function returnFaceLandmarks($value)
    {
        $this->_returnFaceLandmarks = $value;
    }

    public function returnFaceAttributes($value)
    {
        $this->_returnFaceAttributes = $value;
    }

    public function recognitionModel($value)
    {
        $this->_recognitionModel = $value;
    }

    public function returnRecognitionModel($value)
    {
        $this->_returnRecognitionModel = $value;
    }

    public function detectionModel($value)
    {
        $this->_detectionModel = $value;
    }

    public function toArray()
    {
        $return = [];
        $return['returnFaceId'] = $this->_returnFaceId;
        $return['returnFaceLandmarks'] = $this->_returnFaceLandmarks;
        $return['returnFaceAttributes'] = $this->_returnFaceAttributes;
        $return['recognitionModel'] = $this->_recognitionModel;
        $return['returnRecognitionModel'] = $this->_returnRecognitionModel;
        $return['detectionModel'] = $this->_detectionModel;
        return $return;
    }



}