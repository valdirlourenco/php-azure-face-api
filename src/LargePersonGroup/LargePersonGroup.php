<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroup;

use SmartDog23\AzureFaceApi\LargePersonGroup\Create\Create;
use SmartDog23\AzureFaceApi\LargePersonGroup\Train\Train;

class LargePersonGroup {

    private $_client;

    public function __construct($client)
    {
        $this->_client = $client;
    }

    public function create($options = null)
    {
        $create = new Create($this->_client);
        if($options == null) {
            return $create;
        }
        return $create->call($options);
    }

    public function delete()
    {

    }

    public function get()
    {

    }

    public function getTrainingStatus()
    {

    }

    public function list()
    {

    }

    public function train($options = null)
    {
        $train = new Train($this->_client, $options);
        return $train->execute();
    }

    public function update()
    {

    }

}