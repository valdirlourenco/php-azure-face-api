<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace;

class DeleteFaceParameters {

    private $_largePersonGroupId;
    private $_personId;
    private $_persistedFaceId;

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

    public function personId($value)
    {
        $this->_personId = $value;
    }

    public function getPersonId()
    {
        return $this->_personId;
    }

    public function persistedFaceId($value)
    {
        $this->_persistedFaceId = $value;
    }

    public function getPersistedFaceId()
    {
        return $this->_persistedFaceId;
    }

    public function toArray()
    {
        $return = [];
        $return['largePersonGroupId'] = $this->_largePersonGroupId;
        $return['personId'] = $this->_personId;
        $return['persistedFaceId'] = $this->_persistedFaceId;
        return $return;
    }
}
