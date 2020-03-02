<?php

namespace SmartDog23\AzureFaceApi\Services\LargePersonGroup\List_;

use SmartDog23\AzureFaceApi\Utilities\AzureFaceApiService;

class List_ extends AzureFaceApiService
{
    public function __construct($client)
    {
        parent::__construct($client);
        $this->_optionsClass = ListOptions::class;
    }

    public function executeWithOptions(ListOptions $options = null)
    {
        $url = 'largepersongroups';
        return $this->_executeWithOptionsCall($options, $url, 'GET');
    }

    public function execute($returnRecognitionModel = false, $start = 0, $top = 1000)
    {
        $options = new ListOptions();
        $options->parameters()->setReturnRecognitionModel($returnRecognitionModel);
        $options->parameters()->setStart($start);
        $options->parameters()->setTop($top);
        return $this->executeWithOptions($options);
    }
}
