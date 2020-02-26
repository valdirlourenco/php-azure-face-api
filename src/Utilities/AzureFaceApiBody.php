<?php

namespace SmartDog23\AzureFaceApi\Utilities;

use SmartDog23\AzureFaceApi\Utilities\Traits\CastTrait;

class AzureFaceApiBody
{
    use CastTrait;

    private $_isMultipart = false;

    public function __construct()
    {
    }

    public function isMultipart()
    {
        return $this->_isMultipart;
    }

    public function setBodyAsMultipart()
    {
        $this->_isMultipart = true;
    }
}
