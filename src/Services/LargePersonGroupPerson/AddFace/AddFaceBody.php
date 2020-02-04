<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiBody;

class AddFaceBody extends AzureFaceApiBody
{
    protected $_url;

    public function __construct()
    {
        $this->_url = '';
        $this->castArray = ['url'];
    }

    public function url($value)
    {
        $this->_url = $value;
    }
}
