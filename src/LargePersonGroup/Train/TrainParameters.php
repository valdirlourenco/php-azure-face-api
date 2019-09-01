<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Train;

class TrainParameters {

    private $_largePersonGroupId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
    }

    public function largePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function toArray()
    {
        $return = [];
        $return['largePersonGroupId'] = $this->_largePersonGroupId;
        return $return;
    }



}