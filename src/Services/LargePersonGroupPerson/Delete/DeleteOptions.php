<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete;

class DeleteOptions {

    private $_parameters;
    private $_headers;
    private $_body;

    public function __construct()
    {
    }

   public function parameters()
   {
        if($this->_parameters == null) {
            $this->_parameters = new DeleteParameters;
        }
        return $this->_parameters;
   }

   public function headers()
   {
        if($this->_headers == null) {
            $this->_headers = new DeleteHeaders;
        }
        return $this->_headers;
   }

   public function body()
   {
        if($this->_body == null) {
            $this->_body = new DeleteBody;
        }
        return $this->_body;
   }

}
