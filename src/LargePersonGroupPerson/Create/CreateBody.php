<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create;

class CreateBody {

    private $_name;
    private $_userData;

    public function __construct()
    {
        $this->_name = '';
        $this->_userData = '';
    }

    public function name($value)
    {
        $this->_name = $value;
    }

    public function userData($value)
    {
        $this->_userData = $value;
    }

    public function toArray()
    {
        $return = [];
        $return['name'] = $this->_name;
        $return['userData'] = $this->_userData;
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}