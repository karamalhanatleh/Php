<?php
require_once("lib/nusoap.php");
$ns="http://localhost/";

$server = new soap_server();
$server->configureWSDL("Calculator",$ns);

$server->wsdl->schemaTargetNamespace=$ns;


$server->register('subtract', array('n1' => 'xsd:integer', 'n2' => 'xsd:integer'), array('res' => 'xsd:string'), $ns);
$server->register('add', array('n5' => 'xsd:integer', 'n6' => 'xsd:integer'), array('res'=>'xsd:string'), $ns);


function add($n5, $n6){
    $n7 = $n5 + $n6;
    return new soapval('res','xsd:string', $n7);
}

function subtract ($n1, $n2){
    $n3 = $n1 - $n2;
    return new soapval('res','xsd:string',$n3);
}

@$server->service(file_get_contents("php://input"));

?>
