<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Verify;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Verify extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = VerifyOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $url = 'verify';
        return $this->_executeWithOptionsCall($options, $url, 'POST');
    }

    public function execute($faceId1, $faceId2)
    {
        $options = new VerifyOptions();
        $options->body()->setFaceId1($faceId1);
        $options->body()->setFaceId2($faceId2);
        return $this->executeWithOptions($options);
    }

    public function executeFaceToFace($faceId1, $faceId2)
    {
        return $this->execute($faceId1, $faceId2);
    }

    public function executeFaceToPerson($faceId, $largePersonGroupId, $personId)
    {
        $options = new VerifyOptions();
        $options->body()->setFaceId($faceId);
//        $options->body()->setPersonGroupId($largePersonGroupId);
        $options->body()->setLargePersonGroupId($largePersonGroupId);
        $options->body()->setPersonId($personId);
        return $this->executeWithOptions($options);
    }
}
