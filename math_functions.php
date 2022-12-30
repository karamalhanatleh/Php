<?php
include "uses.php";

// floor()

$x=5.3;
$y=5.7;

echo "<b> X = $x <br> y = $y </b>"; br();

echo "floor x : " . floor($x); br();
echo "floor y : " . floor($y); br();
echo "floor 2.5 : " . floor(2.5); br();
echo "floor 4.9 : " . floor(4.9); br(2);

hr(); br();

// ceil()
echo "<b> X = $x <br> y = $y </b>"; br();

echo "ceil x : " . ceil($x); br();
echo "ceil y : " . ceil($y); br();
echo "ceil 2.5 : " . ceil(2.5); br();
echo "ceil 4.9 : " . ceil(4.9); br(2);

hr(); br();


// rand


echo "rand (1 - 5) : " . rand(1,5); br();

echo "rand (10 - 50) : " . rand(10,50); br();

echo "rand (65 -99) : " . rand(65,99); br();

echo "rand (35,49.9) : " . rand(35, 49.9); br();

echo "rand (0.1, 0.9) : " . rand(0.1 ,0.9); br(2);  // 0 

hr(); br();



// min() && max()

echo "Minumum (4,6,8,7,9,0,3,2) = ". min(4,6,8,7,9,0,3,2); br();

echo "Minumum (-999 ,1 ,9) = ". min(-999 ,1 ,9); br();

echo "Minumum (4.7 , 4.71 , 4.770) = ". min(4.7 , 4.71 , 4.770); br(2);


echo "Maximum (4.7 , 4.71 , 4.770) = ". max(4.7 , 4.71 , 4.770); br();

echo "Maximum (-999 ,1 ,9) = ". max(-999 ,1 ,9); br();

echo "Maximum (4,6,8,7,9,0,3,2) = ". max(4,6,8,7,9,0,3,2); br(2);


hr(); br();



// str_replace()
echo str_replace("world","Every body","Hello world!");  br();

$name = "Karam S ALhanatleh ";

echo str_replace("Karam" , "Ali" , $name); br();

echo str_replace("Karam" , strrev("Karam") , $name); br();

echo str_replace("Nokia" ,'Tecno' ,"The model is Nokia"); br();

br(24);
?>