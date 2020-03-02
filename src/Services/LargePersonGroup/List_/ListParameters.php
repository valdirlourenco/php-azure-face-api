<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiParameters;

class ListParameters extends AzureFaceApiParameters
{
    private $_start;
    private $_top;
    private $_returnRecognitionModel;

    public function __construct()
    {
        $this->_start = 0;
        $this->_top = 1000;
        $this->_returnRecognitionModel = false;
    }

    public function setStart($value)
    {
        $this->_start = $value;
    }

    public function setTop($value)
    {
        $this->_top = $value;
    }

    public function setReturnRecognitionModel($value)
    {
        $this->_returnRecognitionModel = $value;
    }
}
