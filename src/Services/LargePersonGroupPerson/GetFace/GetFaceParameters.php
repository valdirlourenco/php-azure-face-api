<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\GetFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class GetFaceParameters extends AzureFaceApiParameters
{
    private $_largePersonGroupId;
    private $_personId;
    private $_persistedFaceId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->_personId = '';
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function setPersonId($value)
    {
        $this->_personId = $value;
    }

    public function getPersonId()
    {
        return $this->_personId;
    }

    public function setPersistedFaceId($value)
    {
        $this->_persistedFaceId = $value;
    }

    public function getPersistedFaceId()
    {
        return $this->_persistedFaceId;
    }
}
