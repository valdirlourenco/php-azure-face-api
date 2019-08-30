<?php

namespace SmartDog23\AzureFaceApi\Face;

use SmartDog23\AzureFaceApi\Face\FaceDetect\FaceDetect;

class Face {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function detect($options = null)
    {
        new FaceDetect($this->_client, $options);
        
    }

    public function findSimilar()
    {
        
    }

    public function group()
    {
        
    }

    public function identify()
    {
        
    }

    public function verify()
    {
        
    }

}