<?php

namespace SmartDog23\AzureFaceApi\Utilities;

use SmartDog23\AzureFaceApi\Utilities\Traits\CastTrait;

class AzureFaceApiBody
{
    use CastTrait;

    private $_isOctet = false;

    public function __construct()
    {
    }

    public function isOctet()
    {
        return $this->_isOctet;
    }

    public function setBodyAsOctet()
    {
        $this->_isOctet = true;
    }
}
