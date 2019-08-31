<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson;

use SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create\Create;

class LargePersonGroupPerson {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function create($options = null)
    {
        new Create($this->_client, $options);

    }

    public function addFace()
    {

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