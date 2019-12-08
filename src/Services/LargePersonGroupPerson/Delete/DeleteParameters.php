<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete;

class DeleteParameters {

    private $_largePersonGroupId;
    private $_personId;

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

    public function toArray()
    {
        $return = [];
        $return['largePersonGroupId'] = $this->_largePersonGroupId;
        return $return;
    }
}
