<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Get;

class GetOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
    }

   public function parameters() 
   {
        if($this->_parameters == null) {
            $this->_parameters = new GetParameters;
        }
        return $this->_parameters;
   }

   public function headers() 
   {
        if($this->_headers == null) {
            $this->_headers = new GetHeaders;
        }
        return $this->_headers;
   }

   public function body() 
   {
        if($this->_body == null) {
            $this->_body = new GetBody;
        }
        return $this->_body;
   }

}