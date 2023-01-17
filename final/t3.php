<?php
function f1()
{
	global $x;
	$x=9;
	echo"$x insise f1";
	
}
function f2()
{
	global $x;
	$x+=6;
	echo"$x insise f2";
	
}

f1();
f2();
?>