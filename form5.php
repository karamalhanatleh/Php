<?php

if(isset($_POST["sub1"])){
	echo $_POST["tt1"];
	print_r($_POST);
	
	if(!isset($_POST["tt1"]) || strlen($_POST["tt1"]) < 1)
		showErrorMSG("Empty Name");
	if(!isset($_POST["pp1"]))
		showErrorMSG("Empty Password");
	if(!isset($_POST["r1"]))
		showErrorMSG("No Gender");
}
function showErrorMSG($str){
	//echo "<font color='red'>$str</font><br/>";
	echo "<p style='color:red'>$str</p>";
}
?>
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