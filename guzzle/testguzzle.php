<?php
require 'vendor/autoload.php';
require '/../whoops/vendor/autoload.php';

//give me whoops for this, it's a little complex
$instance = new \Whoops\Run;
$instance->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$instance->register();

//Use guzzle client
use GuzzleHttp\Client;

//create instance of client
$client = new \GuzzleHttp\Client();

//create a stream - remember, stream isn't data, just the parameters
$response = $client->request('GET', 'https://api.github.com/users/codereviewvideos');

//example of fetch from the stream - getBody method
echo $response->getBody();

//now getbody contents within that method
echo $response->getBody()->getContents();

$data = json_decode($response->getBody()->getContents(), true);
