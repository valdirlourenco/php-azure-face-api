<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class AddFaceBody extends AzureFaceApiBody
{
    protected $_url;
    protected $_image;

    public function __construct()
    {
        $this->_url = '';
        $this->castArray = ['url'];
    }

    public function url($value)
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
