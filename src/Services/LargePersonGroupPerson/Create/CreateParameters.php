<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class CreateParameters extends AzureFaceApiParameters
{
    private $_largePersonGroupId;

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
}
