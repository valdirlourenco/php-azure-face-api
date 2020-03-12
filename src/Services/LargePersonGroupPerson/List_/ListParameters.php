<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class ListParameters extends AzureFaceApiParameters
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
}
