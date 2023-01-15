<?php
include "uses.php";

$x="Regular Expressions";
if(preg_match("/[A-Z]?/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();

$x="Regular Expressions";
if(preg_match("/[A-Z]+/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="knaakkkkkkk";
if(preg_match("/^([a-z]{3})([ab])/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();




$x="knakkkkkkk";
if(preg_match("/^([a-z]{0,3})([ab])/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();




$x="knaakkkkkkk";
if(preg_match("/^([a-z]{3})([ab])/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="knakkkkkkk";
if(preg_match("/^([a-z]{3})([ab])/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="mkbanakkkkkkk";
if(preg_match("/^([a-z]{3})([ab])/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();



$x="m3knakkkkkkk";
if(preg_match("/^([a-z]{3})/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();



$x="mknakkkkkkk";
if(preg_match("/^([a-z]{3})/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="mknakkkkkkk";
if(preg_match("/^(a-z){3}/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();





$x="zbkkkkkkk";
if(preg_match("/^([a-z])([ab])/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();



$x="Regular Expressions";
if(preg_match("/[A-Za-z0-9]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();



$x="Re3gular Expressions";
if(preg_match("/[0-9]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="Regular Expressions";
if(preg_match("/[0-9]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="Regular Expressions";
if(preg_match("/^[A-Z]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();



$x="Regular Expressions";
if(preg_match("/[A-Z]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();



$x="Regular Expressions";
if(preg_match("/[Za]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="Regular Expressions";
if(preg_match("/[s]/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


$x="Regular Expressions";
if(preg_match("/^Regular/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();

$x="8Regular Expressions";
if(preg_match("/^Regular/" , $x))
{
	echo "They Match";
}
else{
	echo "They Not Match";
}
br();


?>