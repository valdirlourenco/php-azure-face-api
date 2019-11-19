<?php
namespace SmartDog23\AzureFaceApi\Utilities;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

class AzureResponse {

    private $_object;
    private $_hasError;
    private $_hasApiError;

    public function __construct($object)
    {
        $this->_object = $object;
        $this->_hasError = false;
        $this->_hasApiError = false;
        if($this->_object instanceof Response) {
            $this->_hasError = false;
        } elseif ($this->_object instanceof ClientException) {
            $this->_hasError = true;
            $this->_hasApiError = true;
        } elseif ($this->_object instanceof ConnectException) {
            $this->_hasError = true;
        } elseif ($this->_object instanceof RequestException) {
            $this->_hasError = true;
        }
    }

    public function result()
    {
        return $this->_object;
    }

    public function getBody()
    {
        if($this->_object instanceof Response) {
            return $this->_object->getBody();
        }
        return null;
    }

    public function hasError()
    {
        return $this->_hasError;
    }

    public function hasApiError()
    {
        return $this->_hasApiError;
    }
}
