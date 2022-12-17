<?php
session_start();
if(isset($_POST["sub1"])){
	$_SESSION["username"] = $_POST["tt1"];
	$_SESSION["password"] = $_POST["pp1"];
	$_SESSION["gender"] = $_POST["r1"];
	$_SESSION["country"] = $_POST["s1"];
	$_SESSION["timer"] = time();
	
	header("Location:sessions3.php");
}

?>

<html><body>
<form method = "post" action = "" >
Name:<input type = "text" name = "tt1" /><br/>
Password:<input type = "password" name = "pp1" /><br/>
Male<input type = "radio" name = "r1" value="0"/>
Female<input type = "radio" name = "r1" value="1"/><br/>
Country:
<select name= "s1" >
<option>Jordan</option>
<option>Syria</option>
<option>Iraq</option>
</select>

<input type="Submit" name="sub1" /> 
<input type="Reset" name="res1" /> 
</form>
</body></html>