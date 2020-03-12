<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson;

use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace\AddFace;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create\Create;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Delete\Delete;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\DeleteFace\DeleteFace;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Get\Get;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\GetFace\GetFace;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\List_\List_;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Update\Update;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\UpdateFace\UpdateFace;

class LargePersonGroupPerson
{

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
        return new GetFace($this->_client);
    }

    public function list()
    {
        return new List_($this->_client);
    }

    public function update()
    {
        return new Update($this->_client);
    }

    public function updateFace()
    {
        return new UpdateFace($this->_client);
    }

}
