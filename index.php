<?php

require 'vendor/autoload.php';
require 'RequestClass.php';


$request = RequestClass::getInstance();
$header = [
    'x-rapidapi-key' => 'e66f51ed41msh3e178be56106463p1350efjsnba17f18c9a96',
    'x-rapidapi-host' => 'football-prediction-api.p.rapidapi.com',
];
$query = [
    'market' => 'classic',
    'iso_date' => '2018-12-01',
    'federation' => 'UEFA',
];

//market=classic&iso_date=2018-12-01&federation=UEFA
$data = $request->send('predictions', $header, $query);
echo '<pre>';
print_r($data);
echo '</pre>';
die;

/*// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://hostname.example.com:2087/cpsess545445/', 'verify' => false]);


$response = $client->request('GET', 'json-api/createacct', [
    'headers' => [
     //   'x-rapidapi-key' => 'e66f51ed41msh3e178be56106463p1350efjsnba17f18c9a96',
      //  'x-rapidapi-host' => 'football-prediction-api.p.rapidapi.com',
      //  'X-Foo' => ['Bar', 'Baz']
    ],
    'query' => [
        'api.version' => 1,
        'username' => 'username',
        'domain' => 'example.com'
    ]
]);
$x = $response->getBody();

$dataObject = json_decode($x->getContents());
echo '<pre>';
print_r($dataObject);
echo '</pre>';
die;*/


