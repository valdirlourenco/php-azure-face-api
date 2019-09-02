<?php

namespace SmartDog23\AzureFaceApi\Face\Detect;

class DetectBody {

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

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}