<?php

namespace SmartDog23\AzureFaceApi\LargePersonGroupPerson\Get;

class GetBody {

    public function __construct()
    {
    }

    public function toArray()
    {
        $return = [];
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}