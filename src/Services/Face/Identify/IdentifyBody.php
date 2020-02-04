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
        $this->_faceIds[] = $value;
    }

    public function maxNumOfCandidatesReturned($value)
    {
        $this->_maxNumOfCandidatesReturned = $value;
    }

    public function confidenceThreshold($value)
    {
        $this->_confidenceThreshold = $value;
    }
}
