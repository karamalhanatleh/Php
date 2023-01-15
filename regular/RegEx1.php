<?php
include "uses.php";
br(2);

echo preg_match("/^.{5}/","12aa3");


br(2);
if(preg_match("/\D/","AAA"))
	echo "match";
else
	echo "not  match";

br(2);


if(preg_match("/\d/","ccc"))
	echo "match";
else
	echo "not  match";

br(2);


if(preg_match("/\d/","111"))
	echo "match";
else
	echo "not  match";

br(2);



$y ="999999999567432";
if(preg_match("/^9*[0-9]{4}/",$y))
	echo "match";
else
	echo "not  match";

br(2);



$y ="9999998765";
if(preg_match("/^9*[0-9]{4}/",$y))
	echo "match";
else
	echo "not  match";

br(2);


$y ="991324";
if(preg_match("/^9*[0-9]{4}/",$y))
	echo "match";
else
	echo "not  match";

br(2);




$y ="999954321";
if(preg_match("/^9*[0-9]{4}/",$y))
	echo "match";
else
	echo "not  match";

br(2);




$y ="http://www.ju.edu.jo";
if(preg_match("/^https?/",$y))
	echo "match";
else
	echo "not  match";



br(4);
$y ="! how are you";
$reg="/how/";
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";
br();
$y ="how are you";
$reg="/^how/";  //  /^ يجب ان تكون الكلمة في بداية السطر]
if(preg_match($reg,$y))
	echo "match";
else
	echo "on match";
br();

$y ="! how are you";
$reg="/^how/";
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();



$y ="! how are you";
$reg='/^(you)/$';
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br(2);


$y ="Regular Expressions";
$reg='/[Rr]/';
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();

$y ="regular Expressions";
$reg='/[Rr]/';
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


$y ="0123456789a";
$reg='/[b]/';
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();




$y ="regular Expressions";
$reg='/[0-9]/';
if(preg_match($reg,$y))
	echo "match";
else
	echo "not  match";

br();


$y ="regular Expressions7";
$reg='/[0-9]/';
if(preg_match($reg ,$y))
	echo "match";
else
	echo "not match";


br();

$y ="regular Expressions7";
$reg='/[0-5]/';
if(preg_match($reg ,$y))
	echo "match";
else
	echo "not match";


br();

$y ="regular Expressions";
$reg='/[A-Za-z0-9]/';
if(preg_match($reg ,$y))
	echo "match";
else
	echo "not match";
br();




$y ="######";
$reg='/[A-Za-z0-9]/';
if(preg_match($reg ,$y))
	echo "match";
else
	echo "not match";
br();


$y ="ABCDEG";
$reg='/[a-z]/';
if(preg_match($reg ,$y))
	echo "match";
else
	echo "not match";
br();


function preg($x,$y){
//echo $x . "        " . $y;br();
	if(preg_match($x ,$y))
	echo "match";
else
	echo "not match";
br();
}


preg("/[a-z]/" , 'ABC');


$y="Password";
$x="/^[A-Z]/";
preg($x,$y);


$y="password";
$x="/^[A-Z]/";
preg($x,$y);

br(3);

$y="BAkkkkk";
$x="/^([a-z])([ab])/";
preg($x,$y);


$y="Bakkkkk";
$x="/^[a-zA-Z][ab]/";
preg($x,$y);



$y="9Bakkkkk";
$x="/^([a-zA-Z])([ab])/";
preg($x,$y);


$y="9aakkkkk";
$x="/^([a-zA-Z0-9])([ab])/";
preg($x,$y);























br(30);
?>