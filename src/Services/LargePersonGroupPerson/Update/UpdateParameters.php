<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Update;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class UpdateParameters extends AzureFaceApiParameters
{
    private $_largePersonGroupId;
    private $_personId;

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
}
