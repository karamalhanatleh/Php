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
br(3);

$s1="Karam,Suleiman,M,Alhanatleh";
$ar3=explode("," , $s1);
print_r($ar3);
br();

$s2="Karam Suleiman M Alhanatleh";
$ar4=explode(" " , $s2);
print_r($ar4);br();

$TopSellers = array(
 "Chevrolet Impala",
 "Chevrolet Malibu",
 "Chevrolet Silverado",
 "Ford F-Series",
 "Toyota Camry",
 "Toyota Corolla",
 "Nissan Altima",
 "Honda Accord",
 "Honda Civic",
 "Dodge Ram"
);
echo "Original Array\n";
echo"<pre>\n";
print_r($TopSellers);
echo "</pre>\n";
br(4);

$num=array(1,2,3,4,5,6,7,8,9);
print_r($num);

array_shift($num);
print_r($num);br();

array_unshift($num,0);
print_r($num);br();

array_pop($num);
print_r($num);br();

array_push($num,9);
print_r($num);br();

$ar5=array(47,5,6,7);
echo array_sum($ar5);br();


$x=array(32,56,43,1,2,0,98,90);
 foreach($x as $v){
	 echo $v." ";
 }
 br();
 
 sort($x);
 foreach($x as $v){
	 echo $v." ";
 }
 br();
 
rsort($x);
 foreach($x as $v){
	 echo $v." ";
 }

$x=array(32,56,43,1,2,0,98,90);
ksort($x);br();
print_r($x);br();

krsort($x);
print_r($x);

br(20);

?>