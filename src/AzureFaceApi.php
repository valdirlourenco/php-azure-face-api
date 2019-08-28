<?php

namespace SmartDog23\AzureFaceApi;

class AzureFaceApi {

    private $key;
    private $region;

    public function __construct($key, $region) 
    {
        $this->key = $key;
        $this->region = $region;
    }

}