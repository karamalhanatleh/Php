
<form method='post' >
Password: <input type="password" name='p'><br>
<input type="submit" name='s'> <br>
</form>











<?php
if(isset($_POST['s'])){
		$y=$_POST['p'];
		if(preg_match("/[A-Z]*/",$y) && preg_match("/[a-z]*/" ,$y) &&
			preg_match("/[0-9]*/" ,$y) && preg_match("/[!@#$%^&*()_+]*/" ,$y) && strlen($y)  > 6 ) {  
		echo "<h4 style='color:green;'>The password is acceptable </h4>";}
	else{
		echo "<p style='color:red;'> you have to use at least one UPPER CASE letter one lowe case , one number  , and one special charcter  match </p>";
		}

}


?>

