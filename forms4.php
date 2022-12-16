
<?php

//forms4_2.php 
// form 
include "uses.php";
$myfile="log.txt";
$handle =fopen($myfile , 'a+') or die (" can't open file !!!");

if(isset($_POST["A"])){
		echo "<b>" .add($_POST['n1'] ,$_POST['n2']) . "</b>";
		//header('Location:forms4_2.php' );
		$tra =date("Y/m/d") . " " . date("h:i:sa") . " add n1= " . $_POST['n1'] . "    n2= " . $_POST['n2'] . "\n";
		fwrite($handle ,$tra);
		echo "<br> <a href='forms4_2.php' > Back to Home </a> \n";

		}
elseif(isset($_POST['S'])){
	echo Subtract($_POST['n1'] ,$_POST['n2']);
	$tra =date("Y/m/d") . " " . date("h:i:sa") . " sub n1= " . $_POST['n1'] . "    n2= " . $_POST['n2'] . "\n";
	fwrite($handle ,$tra);

	echo "<br> <a href='forms4_2.php' > Back to Home </a> \n";

}

function add($a ,$b){return $a + $b ; }
function Subtract($a ,$b){return $a - $b ; }

 
fclose($handle);
?>


