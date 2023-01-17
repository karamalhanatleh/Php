<?php
include("../uses.php");
br();
$array1[0]="One";
$array1[1]="Two";
$array1[2]="Three";

foreach($array1 as $ke => $val){
	echo "$ke == $val";br();
}
br(3);

$x=2.3;
$array1[]="One";
$array1[]="$x";
$array1[]="Welcome to php";
 print_r($array1);
br();


 $array[0]="One";
 $array[1]="Two";
 $array[2]="Three";
 print(count($array));
 
br();
br();


$ar1=array(1,2,3,4,5,6,7,8);
echo implode(" " ,$ar1);
br();

$ar2[0]="Karam";
$ar2[1]="Suleiman";
print_r($ar2);br();
$i2=implode(" ",$ar2);
echo $i2;


?>