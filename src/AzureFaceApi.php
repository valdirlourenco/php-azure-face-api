<?php

namespace SmartDog23\AzureFaceApi;

use SmartDog23\AzureFaceApi\Face\Face;
use SmartDog23\AzureFaceApi\LargePersonGroup\LargePersonGroup;
use SmartDog23\AzureFaceApi\LargePersonGroupPerson\LargePersonGroupPerson;

class AzureFaceApi {

    private $_key;
    private $_baseUri;
    private $_client;

    const RECOGNITION_01 = 'recognition_01';
    const RECOGNITION_02 = 'recognition_02';
    const DETECTION_01 = 'detection_01';
    const DETECTION_02 = 'detection_02';

    private $_face;
    private $_largePersonGroup;
    private $_largePersonGroupPerson;

    public function __construct($key, $region) 
    {
        $this->_key = $key;
        $this->_baseUri = AzureRegions::getApiBaseUrl($region);
        $this->_client = new AzureHttpClient(['base_uri' => $this->_baseUri], $key);
    }

    public function face()
    {
        if($this->_face == null) {
            $this->_face = new Face($this->_client);
        }
        return $this->_face;
    }

    public function largePersonGroup()
    {
        if($this->_largePersonGroup == null) {
            $this->_largePersonGroup = new LargePersonGroup($this->_client);
        }
        return $this->_largePersonGroup;
    }

    public function largePersonGroupPerson()
    {
        if($this->_largePersonGroupPerson == null) {
            $this->_largePersonGroupPerson = new LargePersonGroupPerson($this->_client);
        }
        return $this->_largePersonGroupPerson;
    }

}