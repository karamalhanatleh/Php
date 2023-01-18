<?php
require_once("lib/nusoap.php");

$wsdl="https://www.w3schools.com/xml/tempconvert.asmx?wsdl";

$client = new nusoap_client($wsdl , 'wsdl');

$result=  $client->call("FahrenheitToCelsius",array("Fahrenheit" => "50"));

var_dump($result);

?>

 