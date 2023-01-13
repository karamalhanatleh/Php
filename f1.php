<?php
include "uses.php";
br(3);

print_r(str_split("Hello"));br(2);

$w = "welcomeToTheUniversityOfJordan";
$a = explode("T",$w);
print_r($a);
echo implode($a),$a[1];

echo"<br>";



br(3);
$x =array(22,1,2,0,99,92);
krsort($x);
print_r($x);


?>

