<?php
include("../uses.php");
//

$x=10;
if($x>5)
	echo"1";
else
	echo"0";
br();


$x="Karam";
if($x[-1]=="m")
	print("Match");
else 
	echo"NotMatch";

br();
$y="Karam";
 $reg="/m$/";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
$x="Karam";
echo $x[2];
br();


$flower="rose";
switch($flower)
{
 case "rose": echo $flower . " costs 2.5 ";
 case "daisy": echo $flower . " costs 1.25 "; break;
 case "orchid": echo $flower . " costs 1.5 "; break;
 default: echo " There is no such flower in our shop";
break;
 }
br();

$i=10;
while($i!=5){
	$i=$i-1;
	echo $i;br();
}
br(3);
for($i=0 ; $i<=22 ; $i++){
	if(($i%4)==0){
		echo  $i;br();
	}
	else{
		echo "!";br();
	}
}
br(3);
$array1["A"]="Excellent";
$array1["B"]="very good";
$array1["C"]="good";
 foreach($array1 as $x=>$y)
 {
 echo $x ." means ".$y."<br>";
 }

?>