<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Create;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApi;

class CreateBody {

    private $_name;
    private $_userData;
    private $_recognitionModel;

    public function __construct()
    {
        $this->_name = '';
        $this->_userData = '';
        $this->_recognitionModel = AzureFaceApi::RECOGNITION_02;
    }

    public function name($value)
    {
        $this->_name = $value;
    }

    public function userData($value)
    {
        $this->_userData = $value;
    }

    public function recognitionModel($value)
    {
        $this->_recognitionModel = $value;
    }

    public function toArray()
    {
        $return = [];
        $return['name'] = $this->_name;
        $return['userData'] = $this->_userData;
        $return['recognitionModel'] = $this->_recognitionModel;
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}
