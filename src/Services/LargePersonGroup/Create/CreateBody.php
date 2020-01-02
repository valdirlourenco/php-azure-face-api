<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class CreateBody extends AzureFaceApiBody {

    protected $_name;
    protected $_userData;
    protected $_recognitionModel;

    public function __construct()
    {
        $this->_name = '';
        $this->_userData = '';
        $this->_recognitionModel = AzureFaceApi::RECOGNITION_02;
        $this->castArray = ['name', 'userData', 'recognitionModel'];
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

}
