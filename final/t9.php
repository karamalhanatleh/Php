<?php
$myfile = "test.txt";
$f=fopen($myfile , 'r');


while(!feof($f)){
	echo fgets($f);
}
fclose($f);
?>