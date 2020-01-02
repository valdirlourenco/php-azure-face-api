<?php
namespace SmartDog23\AzureFaceApi\Utilities\Traits;

trait CastTrait {

    protected $castArray;

    public function toArray()
    {
        $return = [];
        foreach ($this->castArray as $item)
        {
            $itemName = '_'.$item;
            $return[$item] = $this->$itemName;
        }
        return $return;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

}
