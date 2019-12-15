<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class DetectBody extends AzureFaceApiBody
{
    private $_url;

    public function __construct()
    {
        parent::construct();
        $this->castArray = ['url'];
    }

    public function url($value)
    {
        $this->_url = $value;
    }
}
