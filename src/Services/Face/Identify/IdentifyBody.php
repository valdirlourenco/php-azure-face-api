<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Identify;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class IdentifyBody extends AzureFaceApiBody
{
    protected $_personGroupId;
    protected $_largePersonGroupId;
    protected $_faceIds;
    protected $_maxNumOfCandidatesReturned;
    protected $_confidenceThreshold;

    public function __construct()
    {
        $this->_personGroupId = '';
        $this->_largePersonGroupId = '';
        $this->_faceIds = [];
        $this->_maxNumOfCandidatesReturned = '10';
        $this->_confidenceThreshold = '';
        $this->castArray = ['personGroupId', 'largePersonGroupId', 'faceIds', 'maxNumOfCandidatesReturned', 'confidenceThreshold'];
    }

    public function setPersonGroupId($value)
    {
        $this->_personGroupId = $value;
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function setFaceIds($value)
    {
        $this->_faceIds[] = $value;
    }

    public function setMaxNumOfCandidatesReturned($value)
    {
        $this->_maxNumOfCandidatesReturned = $value;
    }

    public function setConfidenceThreshold($value)
    {
        $this->_confidenceThreshold = $value;
    }
}
