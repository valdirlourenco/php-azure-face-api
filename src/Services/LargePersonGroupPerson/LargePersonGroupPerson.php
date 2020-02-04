<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson;

use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace\AddFace;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create\Create;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get\Get;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete\Delete;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace\DeleteFace;

class LargePersonGroupPerson {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function addFace()
    {
        return new AddFace($this->_client);
    }

    public function create()
    {
        return new Create($this->_client);
    }

    public function delete()
    {
        return new Delete($this->_client);
    }

    public function deleteFace()
    {
        return new DeleteFace($this->_client);
    }

    public function get()
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
