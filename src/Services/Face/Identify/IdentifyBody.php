<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Identify;

class IdentifyBody {

    private $_personGroupId;
    private $_largePersonGroupId;
    private $_faceIds;
    private $_maxNumOfCandidatesReturned;
    private $_confidenceThreshold;

    public function __construct()
    {
        $this->_personGroupId = '';
        $this->_largePersonGroupId = '';
        $this->_faceIds = '';
        $this->_maxNumOfCandidatesReturned = '10';
        $this->_confidenceThreshold = '';
    }

    public function personGroupId($value)
    {
        $this->_personGroupId = $value;
    }

    public function largePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function faceIds($value)
    {
        $this->_faceIds = $value;
    }

    public function maxNumOfCandidatesReturned($value)
    {
        $this->_maxNumOfCandidatesReturned = $value;
    }

    public function confidenceThreshold($value)
    {
        $this->_confidenceThreshold = $value;
    }

    public function toArray()
    {
        $return = [];
        $return['personGroupId'] = $this->_personGroupId;
        $return['largePersonGroupId'] = $this->_largePersonGroupId;
        $return['faceIds'] = [$this->_faceIds];
        $return['maxNumOfCandidatesReturned'] = $this->_maxNumOfCandidatesReturned;
        $return['confidenceThreshold'] = $this->_confidenceThreshold;
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}
