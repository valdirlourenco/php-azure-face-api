<?php

namespace SmartDog23\AzureFaceApi\Utilities;

class AzureFaceApiOptions
{
    protected $_parameters;
    protected $_headers;
    protected $_body;

    protected $_parametersClass;
    protected $_headersClass;
    protected $_bodyClass;

    public function __construct()
    {
    }

    public function parameters()
    {
        if($this->_parameters == null) {
            $this->_parameters = new $this->_parametersClass;
        }
        return $this->_parameters;
    }

    public function headers()
    {
        if($this->_headers == null) {
            $this->_headers = new $this->_headersClass;
        }
        return $this->_headers;
    }

    public function body()
    {
        if($this->_body == null) {
            $this->_body = new $this->_bodyClass;
        }
        return $this->_body;
    }
}
