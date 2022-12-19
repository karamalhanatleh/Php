<?php
$f= fopen("log2.txt" ,"a") or die("can't open file !!!");

if(isset($_POST['submit'])){
	print_r($_POST);
	
	if(!isset($_POST['name']) || strlen($_POST['name'])<1 )
		show_error("Name is empty");
			
	if(!isset($_POST["pass"]))
		showError("Password is empty");
	if(!isset($_POST["pass"]))
		showError("Gender is empty");
	
}



function show_error($str){
	echo "<font color='red' > $str </font>";

}

fclose($f);
?>



<form method="post" action="">
<br>
<label> Name : <input type="text" name="name" > </label> <br>
<label> Age :   <input type="text" name="age" > </label> <br>  

<label> Password : <input type="password" name="pass" > </label> <br>

Male <input type="radio" name="g" value="0"/>
Female <input type="radio" name="g" value="1"/> <br>
	
country: <select name ="cou" >
 
<?php
	$f=fopen('txt.txt' ,"r") or die ("can't open file !!!") ;
	
	while(!feof($f)){
		echo "<option value='' >" . fgets($f) . "</option> <br>";
	} 
	echo "</select> <br>"; 
	fclose($f);
	
	?>
 <input type="Submit" name="submit">
 <input type="reset" name="rest">
</form>
 
 
 






<hr>
