<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class DetectBody extends AzureFaceApiBody
{
    protected $_url;
    protected $_image;

    public function __construct()
    {
        parent::__construct();
        $this->castArray = ['url'];
    }

    public function setUrl($value)
    {
        $this->_url = $value;
    }

    public function getOctet()
    {
        return $this->_image;
    }

    public function image($data)
    {
        $this->setBodyAsOctet();
        $this->_image = $data;
    }
}
