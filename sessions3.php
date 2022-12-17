<?php
include "uses.php";
session_start();

if (strlen($_SESSION['username']) <2 ){
	echo " is Error in username "; br();

}
else {echo "Name is " . $_SESSION['username']; br();}

if(strlen($_SESSION['password']) <5){
	echo "<b style='color:Tomato;'> Password length must be greater than 8 characters	 </b>"; br();
}
else{" echo Password is " . $_SESSION['password'] ; br(); }

//	sleep(5);
	//header("location:sessions2.php");

?>