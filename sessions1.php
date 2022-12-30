<?php
include "uses.php";

session_start();


//html
echo "<html>
		 <head>
		 <title>Session</title>
		 </head>
		 <body>
		 <h3>Storing data in sessions</h3> ";


$_SESSION['purchase']='9.9';
 echo $_SESSION['purchase'];



echo " </body> <html>";
br(2);


if(isset($_SESSION['purchase']));
echo "Welcome, you have purchased for \$".$_SESSION['purchase']." JDs";




?>