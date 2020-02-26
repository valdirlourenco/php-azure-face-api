<?php

namespace SmartDog23\AzureFaceApi\Utilities;

class AzureFaceApiHeaders {

    private $_contentType;
    private $_key;
    private $_paramsArray;

    const CONTENT_TYPE_JSON = 'application/json';
    const CONTENT_TYPE_OCTET_STREAM = 'application/octet-stream';

    protected function __construct()
    {
        $this->contentType(self::CONTENT_TYPE_JSON);
    }

    public function contentType($value)
    {
        $this->_contentType = $value;
    }

    public function key($value)
    {
        $this->_key = $value;
    }

    public function toArray()
    {
        $this->_paramsArray = [];
        $this->_paramsArray['Content-Type'] = $this->_contentType;
        return $this->_paramsArray;
    }
}
