<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Get;

use SmartDog23\AzureFaceApi\AzureFaceApi;

class GetParameters {

    private $_largePersonGroupId;
    private $_personId;
    private $_userData;
    private $_targetFace;
    private $_detectionModel;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->_personId = '';
        $this->_userData = '';
        $this->_targetFace = '';
        $this->_detectionModel = AzureFaceApi::DETECTION_02;
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

    public function toArray()
    {
        $return = [];
        $return['largePersonGroupId'] = $this->_largePersonGroupId;
        $return['personId'] = $this->_personId;
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}
