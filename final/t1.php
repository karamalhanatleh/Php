<?php
include("lib/nusoap.php");
$w = "http://localhost/Web2Fall2022/server.php?wsdl";
$client = new nusoap_client($w, 'wsdl');
$result = $client->call('area', array( 'r'=>5));
var_dump($result);

 

$result = $client->call('circ', array( 'm'=>5));
var_dump($result);

 

$result = $client->call('add', array( 'n1'=>5 , 'n2'=>10));
var_dump($result);

 
?>