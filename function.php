<?php
//function
function hello(){
	echo "<b> hello </b> <br>";
}
hello();

function str_b($w){
	echo "<b><br> $w </b> <br> ";
}

str_b("karam suleiman");


$wo ="karam suleiman";

function sum($n1 ,$n2){
	echo $n1 + $n2 ; echo "<br>";
}

sum(10,20);
echo "<br>";

function addFive($num) {
     $num += 5;
         }
		 
function addSix(&$num) {
        $num += 6;
         }
         
$orignum = 10;
addFive( $orignum );       

echo "Original Value is $orignum<br />";


addSix( $orignum );
echo "Original Value is $orignum<br />";

echo "<br><hr>";

function adder(&$str2)  
{  
    $str2 .= 'Call By Reference';  
}  
$str = 'Hello ';  
adder($str);  
echo $str; 

?>