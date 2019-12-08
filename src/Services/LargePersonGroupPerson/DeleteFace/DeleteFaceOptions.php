<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace;

class DeleteFaceOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
    }

   public function parameters()
   {
        if($this->_parameters == null) {
            $this->_parameters = new DeleteFaceParameters;
        }
        return $this->_parameters;
   }

   public function headers()
   {
        if($this->_headers == null) {
            $this->_headers = new DeleteFaceHeaders;
        }
        return $this->_headers;
   }

   public function body()
   {
        if($this->_body == null) {
            $this->_body = new DeleteFaceBody;
        }
        return $this->_body;
   }

}
