<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace;

class AddFaceOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
    }

   public function parameters() 
   {
        if($this->_parameters == null) {
            $this->_parameters = new AddFaceParameters;
        }
        return $this->_parameters;
   }

   public function headers() 
   {
        if($this->_headers == null) {
            $this->_headers = new AddFaceHeaders;
        }
        return $this->_headers;
   }

   public function body() 
   {
        if($this->_body == null) {
            $this->_body = new AddFaceBody;
        }
        return $this->_body;
   }

}