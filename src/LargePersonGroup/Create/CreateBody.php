<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Create;

class CreateBody {

    private $_url;

    public function __construct()
    {

    }

    public function url($value)
    {
        $this->_url = $value;
    }

    public function toArray()
    {
        $return = [];
        $return['url'] = $this->_url;
        return $return;
    }

}