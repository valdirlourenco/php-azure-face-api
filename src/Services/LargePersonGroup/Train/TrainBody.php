<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train;

class TrainBody {

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
