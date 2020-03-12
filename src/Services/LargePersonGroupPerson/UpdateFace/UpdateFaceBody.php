<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\UpdateFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class UpdateFaceBody  extends AzureFaceApiBody
{
    protected $_userData;

    public function __construct()
    {
        $this->_userData = '';
        $this->castArray = ['userData'];
    }

    public function setUserData($value)
    {
        $this->_userData = $value;
    }
}
