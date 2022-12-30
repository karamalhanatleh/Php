<?php
$x = 2;
$y = 9;
$z = -4;

/*
if($x >0){
	echo "$x is positive";
}else{
	echo "$x is negative";
}
*/

/*
if ($x>0){
	echo "x is postive";
}elseif ($x<0){ echo "is negative";}
else{echo " is zero";}
*/

/*
echo $x>0 ? " is nagative" :  "is negative";

print "<br>";
$y=9;
echo $y==0 ? " is iqual 9" : " not equal";

*/

$max = $x > $z ? $x : $z;
echo $max;




?>
<hr>
<hr>
<hr><hr>
<hr>
<hr><hr>
<hr>
<hr>
<html>
<body>
	<form method="post" action="if_stat.php">
		<input type="text" name="user" />

		<input type="submit" name="s" />
	</form>
</body> </html>
<?php

if(isset($_POST['s'])){
//	echo "$_POST['s']"
	if($_POST['user'] >0){
	echo " is positive";
	}else{
	echo " is negative";
	}
}


?>

