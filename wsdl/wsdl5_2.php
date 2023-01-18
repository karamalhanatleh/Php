<?php

include('lib/nusoap.php');

$wsdl = "http://localhost/wsdl5.php?wsdl";

$c = new nusoap_client($wsdl, 'wsdl');



$result = $c->call('multiply', array('n1' => 100 , 'n2' => 20));
var_dump($result);

echo "<br>";
 
$result = $c->call('subtract', array('n1' => 50 , 'n2' => 20));
var_dump($result);
?>
 