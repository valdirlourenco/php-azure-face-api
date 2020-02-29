<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class DetectBody extends AzureFaceApiBody
{
    protected $_url;

    public function __construct()
    {
        parent::__construct();
        $this->castArray = ['url'];
    }

    public function setUrl($value)
    {
        $this->_url = $value;
    }
}
