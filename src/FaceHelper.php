<?php

namespace SmartDog23\AzureFaceApi;

use SmartDog23\AzureFaceApi\AzureFaceApi;
use SmartDog23\AzureFaceApi\LargePersonGroup\Create\CreateOptions;
use SmartDog23\AzureFaceApi\LargePersonGroup\Train\TrainOptions;
use SmartDog23\AzureFaceApi\LargePersonGroupPerson\AddFace\AddFaceOptions;

class FaceHelper {

    public function __construct()
    {
    }

    /**
     * @param AzureFaceApi $azureFaceApi
     */
    public function createLargePersonGroup($azureFaceApi, $groupId)
    {
        $options = new CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->body()->name('Description for '.$groupId);
        $options->body()->userData('User data for the group: '.$groupId);
        return $azureFaceApi->largePersonGroup()->create($options);
    }

    public function createLargePersonGroupPerson(AzureFaceApi $azureFaceApi, $groupId)
    {
        $options = new \SmartDog23\AzureFaceApi\LargePersonGroupPerson\Create\CreateOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $name = 'name '.rand(1000, 9999);
        $options->body()->name($name);
        $options->body()->userData('User data for person: '.$name);
        return $azureFaceApi->largePersonGroupPerson()->create($options);
    }

    public function addFaceToPersonInGroup(AzureFaceApi $azureFaceApi, $groupId, $responsePerson)
    {
        $options = new AddFaceOptions();
        $options->parameters()->largePersonGroupId($groupId);
        $options->parameters()->personId($responsePerson);
        $options->parameters()->userData('User data for person in group: ');
        $options->body()->url('https://essencialpromo.com/test/hollywood/ss-001.jpg');
        return $azureFaceApi->largePersonGroupPerson()->addFace($options);
    }

    /**
     * @param AzureFaceApi $azureFaceApi
     */
    public function trainGroup($azureFaceApi, $groupId)
    {
        $options = new TrainOptions();
        $options->parameters()->largePersonGroupId($groupId);
        return $azureFaceApi->largePersonGroup()->train($options);
    }

}
