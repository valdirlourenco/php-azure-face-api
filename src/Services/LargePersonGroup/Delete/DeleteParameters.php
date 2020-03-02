<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Delete;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class DeleteParameters extends AzureFaceApiParameters
{
    private $_largePersonGroupId;

    public function __construct()
    {
        $this->_largePersonGroupId = '';
    }

    public function setLargePersonGroupId($value)
    {
        $this->_largePersonGroupId = $value;
    }

    public function getLargePersonGroupId()
    {
        return $this->_largePersonGroupId;
    }
}
