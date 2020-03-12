<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiOptions;

class ListOptions extends AzureFaceApiOptions
{
    public function __construct()
    {
        $this->_parametersClass = ListParameters::class;
        $this->_headersClass = ListHeaders::class;
        $this->_bodyClass = ListBody::class;
    }

    /** @return ListParameters */
    public function parameters()
    {
        return parent::parameters();
    }

    /** @return ListHeaders */
    public function headers()
    {
        return parent::headers();
    }

    /** @return ListBody */
    public function body()
    {
        return parent::body();
    }
}
