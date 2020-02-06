<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Get;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class GetParameters extends AzureFaceApiParameters
{
    protected $_largePersonGroupId;
    protected $_returnRecognitionModel;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->_returnRecognitionModel = false;
        $this->castArray = ['returnRecognitionModel'];
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function setReturnRecognitionModel($value)
    {
        $this->_returnRecognitionModel = $value;
    }

    public function getReturnRecognitionModel()
    {
        return $this->_returnRecognitionModel;
    }
}
