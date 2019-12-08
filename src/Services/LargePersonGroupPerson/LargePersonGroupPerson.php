<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson;

use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace\AddFace;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create\Create;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get\Get;

class LargePersonGroupPerson {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function addFace($options = null)
    {
        return new AddFace($this->_client);
    }

    public function create($options = null)
    {
        return new Create($this->_client);
    }

    public function delete()
    {

    }

    public function deleteFace()
    {

    }

    public function get($options = null)
    {
        return new Get($this->_client);
    }

    public function getFace()
    {

    }

    public function list()
    {

    }

    public function update()
    {

    }

    public function updateFace()
    {

    }

}
