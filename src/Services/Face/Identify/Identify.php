<?php

namespace SmartDog23\AzureFaceApi\Services\Face\Identify;

use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class Identify extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = IdentifyOptions::class;
    }

    public function executeWithOptions($options = null)
    {
        $url = 'identify';
        return $this->_executeWithOptionsCall($options, $url, 'POST');
    }

    public function execute($faceIds, $largePersonGroupId, $personGroupId = null, $maxNumOfCandidatesReturned = 10)
    {
        $options = new IdentifyOptions();
        $options->body()->faceIds($faceIds);
        $options->body()->largePersonGroupId($largePersonGroupId);
        $options->body()->personGroupId($personGroupId);
        $options->body()->maxNumOfCandidatesReturned($maxNumOfCandidatesReturned);
        return $this->executeWithOptions($options);
    }
}
