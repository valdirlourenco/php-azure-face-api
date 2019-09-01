<?php

namespace SmartDog23\AzureFaceApi\Face\Identify;

class IdentifyOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
    }

   public function parameters() 
   {
        if($this->_parameters == null) {
            $this->_parameters = new IdentifyParameters;
        }
        return $this->_parameters;
   }

   public function headers() 
   {
        if($this->_headers == null) {
            $this->_headers = new IdentifyHeaders;
        }
        return $this->_headers;
   }

   public function body() 
   {
        if($this->_body == null) {
            $this->_body = new IdentifyBody;
        }
        return $this->_body;
   }

}