<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Detect;

class DetectOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
    }

   public function parameters()
   {
        if($this->_parameters == null) {
            $this->_parameters = new DetectParameters;
        }
        return $this->_parameters;
   }

   public function headers()
   {
        if($this->_headers == null) {
            $this->_headers = new DetectHeaders;
        }
        return $this->_headers;
   }

   public function body()
   {
        if($this->_body == null) {
            $this->_body = new DetectBody;
        }
        return $this->_body;
   }

}
