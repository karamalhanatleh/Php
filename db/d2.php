<?php
extract($_POST);
$dblink = mysqli_connect('localhost' , 'root','' , 'db_karam') or die ("could not connect to DB");

$r= mysqli_query($dblink , "delete from t1 where id=$id") or die ("Query failed:" . mysqli_error()); 

$x= mysqli_affected_rows($dblink);

echo $x ." record delet ";
$trans = "one record were deleted \n";
$myfile='log.txt';
$f= fopen($myfile ,'a') or die ("can't open file ");
fwrite($f ,$trans);
fclose($f);

mysqli_close($dblink);




?>