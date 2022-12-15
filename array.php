<?php

/*
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";

echo "count is array" . count($cars) ."<br> <br>";

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
	"one" => "1"
];

print_r ($array);
echo "<br>";

var_dump($array);

echo "<br> <br>  <hr>";
//////////////
$Concerts = array("Jimmy Buffett", "Chris Isaak", "Bonnie
Raitt","James Taylor", "Alicia Keys");



print_r($Concerts);
echo "<br>";

echo count($Concerts);
echo "<br>";

echo "$Concerts[0]<br />";

*/

/*
$marks =array(
	'Arabic'  => 90 , 
	'English' => 80 , 
	'French'  => 89
	);
print_r($marks);
echo "<br>";

echo $marks['Arabic'];
*/

/*
$nums= array(0,1,2,3,4,5);
print_r($nums);
echo "<br>";


$array2 = array_slice($nums ,1 ,3);
print_r($array2);
*/

//$nums= array(,6,2,1,4,5);

/*
$array1[2]="One";
$array1[3]="Two";
$array1[4]="Three";

print_r($array1); echo "<br>";
print(count($array1));echo "<br>";


$array1[5]="Four";
print_r($array1); echo "<br>";

print(count($array1));echo "<br>";

$array1= array(1,2,3,4,5,6);
for($i=0 ; $i<=count($array1) ; $i++)
	{
		echo $array1[$i]; echo "<br>";
	}
*/

/*
$a=array("Welcome","to","PHP");
$w=implode(" ",$a);
echo "$w <br>";

$na=array("karam" , "suleiman", 'mohammad' , 'Alhanatleh');
$im1 = implode("_" , $na);
echo "$im1 <br>";

$im2= implode(" ",$na);
echo $im2;echo "<br>";



$a=array(1,2,3,56,78,4);
$w=implode($a);
echo "$w <br>";
echo "<br>";


$a=array(1,2,3,56,78,4);
 $w=implode("+",$a);
 echo "$w <br>";


$w="welcome, to, php";
$a=explode(", ",$w);
print_r($a);
echo "<br>";


$w="hello their";
$r=explode(" ",$w);
print_r($r);
*/

/*
echo "<br>";
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
echo "<br>";

array_shift($TopSellers);
print_r($TopSellers);
echo "<br>";
*/

/*
echo "<br>";

echo "<hr>";
$n=array(0,1,2,3,4);
print_r($n); echo "<br>";
array_shift($n);
print_r($n); echo "<br>";

array_pop($n);echo "<br>";
print_r($n); echo "<br>";
array_pop($n);echo "<br>";
print_r($n); echo "<br>";

array_push($n ,5,6);
print_r($n); echo "<br>";
*/

/*
echo "<br>";

$z=array("A"=>1, "B"=>2, "C"=>3);
print_r($z);
echo "<br />";
$y = array_values($z);
print_r($y);
*/



/*
$array[0]="One";
$array[1]="Two";
$array[2]="Three";
print_r($array);
echo "<br>";
echo "<br>";

echo "Current element: ". current($array)." Key ".key($array)."<br>";
echo "Next element: " . next($array)." Key ".key($array)."<br>";

echo "Next element: " . next($array)." Key ".key($array)."<br>";
echo "Current element: ". current($array)." Key ".key($array)."<br>";
echo "Previous element: " . prev($array)." Key ".key($array)."<br>";

echo "Last element: " . end($array)." Key ".key($array)."<br>";
echo "Resetting the array:..... " ."<br>";

reset($array);
echo "Current element: " . current($array)." Key ".key($array)."<br>";
*/

/*
$a=array("Ahmed"=>28,"Faten"=>22,"Ali"=>27);
 print_r($a);
 $a["Ali"]="";
 echo "<br>";
 print_r($a);
 unset($a["Ali"]);
 echo "<br>";
 print_r($a);
 unset($a["Faten"]);
 echo "<br>";
 print_r($a);
 unset($a["Ahmed"]);
 echo "<br>";
 print_r($a);
echo "<br>";
*/


$grades=array(70,98,87,79,68,76,98);
 print_r($grades);
 echo "<br>";
 echo "<br>";
 $sum=array_sum($grades);
 $avg=$sum/count($grades);
 echo "Sum= " .$sum ."<br>";
 echo "average= ". $avg;










?>