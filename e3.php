<?php
$dblink = mysqli_connect('localhost' ,'root' , '' ,'db_karam') or die("could not connect to db");
extract($_REQUEST);

		$result = mysqli_query($dblink , "update t1 set salary='$salary', name='$name' , country='$country' where id=$id");
		$x= mysqli_affected_rows($dblink);
if($x){
	echo"Your record were updated";
}

mysqli_close($dblink);

$trans= "one record were updateedted \r\n";
$handle=fopen('log.txt','a') or die("can't open file");
fwrite($handle ,$trans);
fclose($handle);
echo "<br>";

?>