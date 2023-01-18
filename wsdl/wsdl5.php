<?php
require_once("lib/nusoap.php");
$ns="http://localhost/";


$server = new soap_server();
$server->configureWSDL("Calculator" , $ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register("multiply" , array('n1' =>'xsd:integer' , 'n2'=>'xsd:integer') , array('r' => "xsd:string"),$ns);
$server->register("subtract" , array('n1' => "xsd:integer" ,'n2' => 'xsd:integer') ,array('r' =>'xsd:string'),$ns);


function multiplt($n1 ,$n2){
	$n3 =$n1 * $n2;
	return new soapval('r' ,'xsd:string' , $n3);
}

function subtract($n1 , $n2){
	$n3 =$n1 - $n2;
	return new soapval("r" , 'xsd:string' , $n3);
}

@$server->service(file_get_contents("php://input"));

?>
