<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\AzureFaceApi;

class AddFaceBody {

    private $_url;

    public function __construct()
    {
        $this->_url = '';
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