<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class GetParameters extends AzureFaceApiParameters
{
    private $_largePersonGroupId;
    private $_personId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->_personId = '';
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
}
