<?php
if(isset($_POST["submit"])){
	//echo $_POST["t1"];
	print_r($_POST);
	if(!isset($_POST["tt1"]) || strlen($_POST["tt1"]) < 1)
		showError("Name is empty");
	if(!isset($_POST["pp1"]))
		showError("Password is empty");
	if(!isset($_POST["r1"]))
		showError("Gender is empty");
	
}

function showError($str){
	echo "<font color='red'>$str</font>";
}
?>

<form method="post" action="">
Name:<input type="text" name="tt1"/><br/>
Password:<input type="password" name="pp1" /><br/>
Male<input type="radio" name="r1" value="0"/>
Female<input type="radio" name="r1" value="1"/><br/>
Country:<select name="s1">
<option>Jordan</option>
<option>Syria</option>
<option>Iraq</option>
</select><br/><br/>

<input type="Submit" name="submit"/>
<input type="reset" name="reset"/>
</form>
