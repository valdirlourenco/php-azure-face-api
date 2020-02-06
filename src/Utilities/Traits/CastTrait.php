<?php

namespace SmartDog23\AzureFaceApi\Utilities\Traits;

trait CastTrait
{

    protected $castArray;

    public function toArray()
    {
        $return = [];
        if (is_array($this->castArray)) {
            foreach ($this->castArray as $item) {
                $itemName = '_' . $item;
                $valueToReturn = $this->$itemName;
                if(is_bool($this->$itemName)) {
                    $valueToReturn = 'false';
                    if($this->$itemName == true) {
                        $valueToReturn = 'true';
                    }
                }
                $return[$item] = $valueToReturn;
            }
        }
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}
