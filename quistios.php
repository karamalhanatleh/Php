
<br>
<br>
<br>
<?php
/*
A. Given the following string:
“Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday”
Write a code to print the following 4 line of output:
1.Array ([0] =>Sunday [1] =>Monday [2] =>Tuesday [3] =>Wednesday [4] =>Thursday [5] =>Friday [6] =>Saturday)
2. Array ([0] =>Friday [1] => Monday [2] =>Saturday [3] =>Sunday [4] =>Thursday [5] =>Tuesday [6] =>Wednesday)
3. Array ([0] => Wednesday [1] => Tuesday [2] =>Thursday [3] =>Sunday [4] => Saturday [5] => Monday [6] =>Friday)
4.the 3rd character of the 3rd element is: u
*/
$day= "Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday";
$ar_d=explode(", " , $day);
print_r ($ar_d);
echo "<br>";
sort($ar_d);
print_r($ar_d);

echo "<br>";
rsort($ar_d);
print_r($ar_d);

echo "<br>";
echo "<br>";
?>
<hr>
<hr>
<?php
/*
Given the same string as before, create a dropdown box that list all string days as shown
in the figure below:

write a code that will print the selected option of the dropdown list when a submit button is
pressed. The string will appear before the dropdown list as shown below:
*/

if(isset($_POST['s'])){
echo ($_POST['da']);}
$day= "Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday";
$day=explode(", "  , $day);
echo "<form action=''  method='post' >";
	echo "<select name= 'da'";
		foreach($day as $value){
			echo "<option value=$value>" . $value  . "</option>";
		}
		echo "</select";
		echo "<br>";
		echo "<input type='submit' name='s'>";
		
	echo "</form>"; 
		
		
		
?>


<?php
/*
write a php code/page that will do what follows:
• Read username and password from the user through a form.
• When the submit button is pressed the username and password will be saved in a cookie file
AND on a text file on the server named “userinfo.txt”.
• After saving the information in the previous step, user will be redirected to another page
that will show the username and the HASHED password.
HINT: you don’t have to write the HTML form code, assume text box named T1, password
name P1, submit button S1, and the method is post.
*/



?>
