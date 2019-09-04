<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson;

use SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace\AddFace;
use SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create\Create;

class LargePersonGroupPerson {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function addFace($options = null)
    {
        $addFace = new AddFace($this->_client, $options);
        return $addFace->execute();
    }

    public function create($options = null)
    {
        $create = new Create($this->_client, $options);
        return $create->execute();

    }

    public function delete()
    {

    }

    public function deleteFace()
    {

    }

    public function get()
    {

    }

    public function getFace()
    {

    }

    /**
     * this is the list method but 'list' is a reserved word in PHP
     */
    public function listPerson()
    {

    }

    public function update()
    {

    }

    public function updateFace()
    {

    }

}
