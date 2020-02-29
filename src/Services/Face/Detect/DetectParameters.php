<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;
use SmartDog23\AzureFaceApi\Utilities\Traits\CastTrait;

class DetectParameters extends AzureFaceApiParameters
{
    protected $_returnFaceId;
    protected $_returnFaceLandmarks;
    protected $_returnFaceAttributes;
    protected $_recognitionModel;
    protected $_returnRecognitionModel;
    protected $_detectionModel;

    const ATTRIBUTE_AGE = 'age';
    const ATTRIBUTE_GENDER = 'gender';
    const ATTRIBUTE_HEAD_POSE = 'headPose';
    const ATTRIBUTE_SMILE = 'smile';
    const ATTRIBUTE_FACIAL_HAIR = 'facialHair';
    const ATTRIBUTE_GLASSES = 'glasses';
    const ATTRIBUTE_EMOTION = 'emotion';
    const ATTRIBUTE_HAIR = 'hair';
    const ATTRIBUTE_MAKEUP = 'makeup';
    const ATTRIBUTE_OCCLUSION = 'occlusion';
    const ATTRIBUTE_ACCESSORIES = 'accessories';
    const ATTRIBUTE_BLUR = 'blur';
    const ATTRIBUTE_EXPOSURE = 'exposure';
    const ATTRIBUTE_NOISE = 'noise';
    const ATTRIBUTE_ALL = 'age,gender,headPose,smile,facialHair,glasses,emotion,hair,makeup,occlusion,accessories,blur,exposure,noise';

    public function __construct()
    {
        $this->_returnFaceId = 'true';
        $this->_returnFaceLandmarks = 'false';
        $this->_returnFaceAttributes = '';
        $this->_recognitionModel = AzureFaceApi::RECOGNITION_02;
        $this->_returnRecognitionModel = 'false';
        $this->_detectionModel = AzureFaceApi::DETECTION_02;
        $this->castArray = ['returnFaceId', 'returnFaceLandmarks', 'returnFaceAttributes', 'recognitionModel', 'returnRecognitionModel', 'detectionModel'];
    }

    public function setReturnFaceId($value)
    {
        $this->_returnFaceId = $value;
    }

    public function setReturnFaceLandmarks($value)
    {
        $this->_returnFaceLandmarks = $value;
    }

    public function setReturnFaceAttributes()
    {
        $args = func_get_args();
        $attributes = '';
        if (!is_null($args)) {
            $attributes = implode(',', $args);
        }
        $this->_returnFaceAttributes = $attributes;
    }

    public function setRecognitionModel($value)
    {
        $this->_recognitionModel = $value;
    }

    public function setReturnRecognitionModel($value)
    {
        $this->_returnRecognitionModel = $value;
    }

    public function setDetectionModel($value)
    {
        $this->_detectionModel = $value;
    }
}
