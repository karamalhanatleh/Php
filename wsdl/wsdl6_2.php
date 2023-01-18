<?php
include('lib/nusoap.php');

$wsdl = "http://localhost/wsdl6.php?wsdl";
 
$c = new nusoap_client($wsdl, 'wsdl');

$result = $c->call('add', array('n1' => 100, 'n2' =>300));
var_dump($result);

$result = $c->call('subtract', array('n5' => 100, 'n6' => 50));
var_dump($result);
?>