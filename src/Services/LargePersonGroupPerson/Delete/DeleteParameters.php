<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class DeleteParameters extends AzureFaceApiParameters
{

    protected $_largePersonGroupId;
    protected $_personId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
        $this->_personId = '';
        $this->castArray = ['largePersonGroupId', 'personId'];
    }

    public function largePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function _getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }

    public function personId($value)
    {
        $this->_personId = $value;
    }

    public function _getPersonId()
    {
        return $this->_personId;
    }
}
