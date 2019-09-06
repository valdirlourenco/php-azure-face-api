<?php

namespace SmartDog23\AzureFaceApi\Face;

use SmartDog23\AzureFaceApi\Face\Detect\Detect;
use SmartDog23\AzureFaceApi\Face\Identify\Identify;

class Face {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function detect($options = null)
    {
        $detect = new Detect($this->_client);
        if($options == null) {
            return $detect;
        }
        return $detect->call($options);
        
    }

    public function findSimilar()
    {
        
    }

    public function group()
    {
        
    }

    public function identify($options = null)
    {
        $identify = new Identify($this->_client);
        if($options == null) {
            return $identify;
        }
        return $identify->call($options);
    }

    public function verify()
    {
        
    }

}