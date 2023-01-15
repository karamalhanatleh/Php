<?php

extract($_POST);
$dblink= mysqli_connect('localhost', 'root' , '' ,'db_karam');


/*
	$r=mysqli_query($dblink ,"insert into t1 (id , name ,salary, country) values
							('$id' , '$name' ,'$salary','$country')") or 
		die("query faild: ".mysqli_error());
*/
	$r=mysqli_query($dblink ,"insert into t1 (id , name ,salary, country) values
							('$id' , '$name' ,'$salary','$country')") or 
		die("query faild: ".mysqli_error());
//$r= mysqli_query($dblink ,"insert into t1 (id ,name , salary , country) 
//	values('$id' ,'$name' , $salary ,'$country')") or die ("query failed:" . mysqli_error());

$x= mysqli_affected_rows($dblink);

echo "$x record(s) insertes";
$trans =  "one record were insertes to the db \r\n";

$myfile ='log.txt';
$handle = fopen($myfile ,'a');
fwrite($handle , $trans);

mysqli_close($dblink);



?>