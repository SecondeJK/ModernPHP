<?php
require 'vendor/autoload.php';
require '../whoops/vendor/autoload.php';

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
//echo $response->getBody();

//now getbody contents within that method
$contents = $response->getBody()->getContents();
//echo $contents;

//get the data into JSON object
$dataconvert = json_decode($contents, true);
//echo $dataconvert;
//var_dump($dataconvert);

echo "Check this out: I've got an array of decoded JSON. Here's the location of the user: " . $dataconvert['location'];

//let's try and connect to twitter using guzzle and oauth

//first, we need the oauth classes
use GuzzleHttp\Subscriber\Oauth\Oauth1;

//guzzle documentation pushes a handler stack into the client object
use GuzzleHttp\HandlerStack;

$stack = HandlerStack::create();

//need to set up an oauth credentials object instance
$oauth = new Oauth1([
    'consumer_key'    => 'gLhbcp7tdvjRp91XZy1WWCsgG',
    'consumer_secret' => '4aWSYnKNxpDetzJDurE4I8qmQ347cD1Youxu1yNIyP1BGYL3jc',
    'token'           => '3172509796-L2rKMmyHSwo3MBYpREBqN54eNc2stWikeMiom75',
    'token_secret'    => 'PfwFShoeFrZ1hDZ3TdtOSFKvUX3K9W3rjEZ9uEucFAJNK'
]);

$stack->push($oauth);

//setting up the guzzle client
$oauthclient = new \GuzzleHttp\Client([
  'handler' => $stack,
  'auth' => 'oauth'
]);

$res = $oauthclient->request('GET', 'https://api.twitter.com/1.1/statuses/home_timeline.json?count=1');
//$decoded_res = json_decode($res, true);
$resdata = $res->getBody()->getContents();
$dataconvert = json_decode($resdata, true);
print_r($dataconvert);
