<?php 

namespace SmartDog23\AzureFaceApi\Face\FaceDetect;

use SmartDog23\AzureFaceApi\Face\FaceDetect\FaceDetectOptions;

class FaceDetect {

    private $_client;
    private $_options;

    public function __construct($client, $options = null)
    {
        if(is_null($options)) {
            $options = new FaceDetectOptions();
        }
        $this->_options = $options;
        $this->_client = $client;
        $this->execute();
    }

    public function execute()
    {
        $headers = $this->_options->headers()->toArray();
        $parameters = $this->_options->parameters()->toArray();
        $body = $this->_options->body()->toArray();
        //dd($parameters);
        $options = [];
        $options['headers'] = $headers;
        $options['query'] = $parameters;
        $options['body'] = json_encode($body);
        //dd($options);
        //dump(json_decode(json_encode($headers, true)));
        //dump(json_decode(json_encode($parameters, true)));
        //dump((array) $headers);
        //try {
        $response = $this->_client->request('POST', 'detect', $options);

        //} catch(Exception $e) {
         //   echo $e->getMessage();
        //}
        dump($response->getBody()->getContents());
    }
}