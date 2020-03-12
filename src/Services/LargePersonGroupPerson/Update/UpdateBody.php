<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Update;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class UpdateBody  extends AzureFaceApiBody
{
    protected $_name;
    protected $_userData;

    public function __construct()
    {
        $this->_name = '';
        $this->_userData = '';
        $this->castArray = ['name', 'userData'];
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function setUserData($userData)
    {
        $this->_userData = $userData;
    }
}
