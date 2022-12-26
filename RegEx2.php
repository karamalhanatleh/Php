<?php
include "uses.php";

function preg($x,$y){
	if(preg_match($x ,$y))
	echo "match";
else
	echo "not match";
br();
}


$y ="mknakkkkkk ";
$reg="/^([a-z]{3})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br(2);

$y ="mknakkkkkk ";
$reg="/^([a-z]{33})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();



$y ="mkndakkkkkk ";
$reg="/^([a-z]{3})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();



$y ="knakkkkkkkkk";
$reg="/^([a-z]{0,3})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();



$y ="knakkkkkkkkk";
$reg="/^([a-z]{0,3})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


$y ="akkkkkkkk";
$reg="/^([a-z]{0,3})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br(2);


$y ="iuyyakkkkkk";
$reg="/^([a-z]{0,3})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br(3);


/*
 * zero or more
 + one or more
 ?  zero or one
*/

$y ="Regular Expressions";
$reg="/[A-Z]+/"; 
if(preg_match($reg,$y))
	echo "You have at least one Uppercast Leter";
else
	echo "you have to use at least one UPPER CASE letter  match";

br(2);

$y ="password";
$reg="/[A-Z]*/"; 
if(preg_match($reg,$y) && preg_match("/[a-z]*/" ,$y) &&
		preg_match("/[0-9]*/" ,$y) && preg_match("/[!@#$%^&*()_+]*/" ,$y) && strlen($y)  > 6 )    
	echo "the password is ok";
else
	echo "you have to use at least one UPPER CASE letter one lowe case , one number  , and one special charcter  match";
br(3);



$y ="iakkkkkk";
$reg="/^([a-z]?)([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


$y ="kiakkkkkk";
$reg="/^([a-z]?)([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br(2);


$y ="akkkkkk";
$reg="/^([a-z]?)([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


$y ="akkkkkk";
$reg="/^([a-z]+)([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br(2);


$y ="akkkkkk";
$reg="/^([a-z]{3,4})([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


$y ="jjakkkkkk";
$reg="/^([a-z]+)([ab])/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();

$y ="akkkkkk";
$reg="/^([a-z]+)([ab]?)/"; 
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


br(25);


?>