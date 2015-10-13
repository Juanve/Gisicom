<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$base_uri = "https://build.phonegap.com/api/v1/";
$update_uri = "apps/1658284";
$url = $base_uri . $update_uri;
$user = "juanvelez@wstgroup.net";
$pass = "psclcdAI7";
$body = 'data={"pull":"true"}';
$method = "PUT";
$client = new Client();
$options = [
 'base_uri' => $base_uri,
 'auth' => [$user, $pass],
 'timeout' => 5.0,
 'body' => $body,
 'headers' => [
  'Content-type' => 'multipart/form-data'
 ]
];
$res = $client->put($update_uri, $options);
//echo $res->getBody();
$content = json_decode($res->getBody());
if ($content->{"id"} == 1658284){
 echo "OK";
} else {
 echo "ERR";
}
