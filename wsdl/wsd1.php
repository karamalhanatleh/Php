<?php
if(isset($_POST['s']){
require_once("lib/nusoap.php");
$wsdl = "https://www.w3schools.com/xml//tempconvert.asmx?WSDL";
$client  =  new nusoap_client($wsdl , 'wsdl');
$result = $client->call('CelsiusToFahrenheit' , array("Celsius" => "$_POST['t1']));

	
}
/*
require ("lib/nusoap.php");
$wsdl = "https://www.w3schools.com/xml//tempconvert.asmx?WSDL";
$client = new nusoap_client($wsdl ,'wsdl');
$result = $client->call("CelsiusToFahrenheit" , array("Celsius" => "15"));

//var_dump($result);
echo $result['CelsiusToFahrenheitResult'];
*/
?>
<form method="post" action="">
<input type="text" name="t1" />
<input type='submit' name='s' value="Convert"/>
</form 
