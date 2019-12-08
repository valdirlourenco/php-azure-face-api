<?php

namespace SmartDog23\AzureFaceApi;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\Services\LargePersonGroup\Train\TrainOptions;
use SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\AddFace\AddFaceOptions;

class FaceHelper {

    private $azureFaceApi;

    public function __construct(AzureFaceApi $azureFaceApi)
    {
        $this->azureFaceApi = $azureFaceApi;
    }

    /**
     * @param AzureFaceApi $azureFaceApi
     */
    public function createLargePersonGroup($groupId)
    {
        $options = new CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->body()->name('Description for '.$groupId);
        $options->body()->userData('User data for the group: '.$groupId);
        return $this->azureFaceApi->largePersonGroup()->create($options);
    }

    public function createLargePersonGroupPerson($groupId)
    {
        $options = new \SmartDog23\AzureFaceApi\Services\LargePersonGroupPerson\Create\CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $name = 'name '.rand(1000, 9999);
        $options->body()->name($name);
        $options->body()->userData('User data for person: '.$name);
        return $this->azureFaceApi->largePersonGroupPerson()->create($options);
    }

    public function addFaceToPersonInGroup($groupId, $responsePerson)
    {
        $options = new AddFaceOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($responsePerson);
        $options->parameters()->userData('User data for person in group: ');
        $options->body()->url('https://essencialpromo.com/test/hollywood/ss-001.jpg');
        return $this->azureFaceApi->largePersonGroupPerson()->addFace($options);
    }

    /**
     * @param AzureFaceApi $azureFaceApi
     */
    public function trainGroup($groupId)
    {
        $options = new TrainOptions();
        $options->parameters()->largePersonGroupId($groupId);
        return $this->azureFaceApi->largePersonGroup()->train($options);
    }

}
