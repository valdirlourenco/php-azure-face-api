<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup\Create;

class CreateOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
        
    }

   public function parameters() 
   {
        if($this->_parameters == null) {
            $this->_parameters = new FaceDetectParameters;
        }
        return $this->_parameters;
   }

   public function headers() 
   {
        if($this->_headers == null) {
            $this->_headers = new FaceDetectHeaders;
        }
        return $this->_headers;
   }

   public function body() 
   {
        if($this->_body == null) {
            $this->_body = new FaceDetectBody;
        }
        return $this->_body;
   }

}