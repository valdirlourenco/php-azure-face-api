<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class VerifyBody extends AzureFaceApiBody
{
    protected $_faceId1;
    protected $_faceId2;
    protected $_faceId;
    protected $_personGroupId;
    protected $_largePersonGroupId;
    protected $_personId;

    public function __construct()
    {
        parent::__construct();
        $this->castArray = ['faceId1', 'faceId2', 'faceId', 'personGroupId', 'largePersonGroupId', 'personId'];
    }

    public function setFaceId1($value)
    {
        $this->_faceId1 = $value;
    }

    public function setFaceId2($value)
    {
        $this->_faceId2 = $value;
    }

    public function setFaceId($value)
    {
        $this->_faceId = $value;
    }

    public function setPersonGroupId($value)
    {
        $this->_personGroupId = $value;
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function setPersonId($value)
    {
        $this->_personId;
    }
}
