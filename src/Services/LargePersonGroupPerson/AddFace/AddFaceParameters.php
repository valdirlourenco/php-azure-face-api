<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class AddFaceParameters extends AzureFaceApiParameters
{
    protected $_largePersonGroupId;
    protected $_personId;
    protected $_userData;
    protected $_targetFace;
    protected $_detectionModel;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->_personId = '';
        $this->_userData = '';
        $this->_targetFace = '';
        $this->_detectionModel = AzureFaceApi::DETECTION_02;
        $this->castArray = ['largePersonGroupId', 'personId', 'userData', 'targetFace', 'detectionModel'];
    }

    public function largePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function personId($value)
    {
        $this->_personId = $value;
    }

    public function getPersonId()
    {
        return $this->_personId;
    }

    public function userData($value)
    {
        $this->_userData = $value;
    }

    public function targetFace($value)
    {
        $this->_targetFace = $value;
    }

    public function detectionModel($value)
    {
        $this->_detectionModel = $value;
    }
}
