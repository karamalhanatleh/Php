<form action="" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

<input type="submit">
</form>


<?php

include "uses.php";
/* 
echo "Welcome Mr " . $_POST['name']; br();

echo "the email is" . $_POST['email']; br();
*/

br(2);
hr(2);
br(2);

?>




<form method="post" action="">
 <label>Name: <input type="text" name="name" value="Ahmad"> </label><br>
 <label>Age: <input type="text" name="age" value="20"> </label><br>
 <input type="Submit" value="Send">
 <input type="reset" value="Clear">
 
 <?php
 br(2);
 echo $_POST["name"] ;br();
 echo "Your age is ".$_POST["age"]." years old";
 
 ?>