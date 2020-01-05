<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class CreateBody extends AzureFaceApiBody
{
    private $_name;
    private $_userData;

    public function __construct()
    {
        $this->_name = '';
        $this->_userData = '';
        $this->castArray = ['name', 'userData'];
    }

    public function name($value)
    {
        $this->_name = $value;
    }

    public function userData($value)
    {
        $this->_userData = $value;
    }
}
