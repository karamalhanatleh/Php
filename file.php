<?php

include"uses.php";
$f = fopen("txt.txt","r") or die("not exist");

?>

<form method='post' action='file.php'>
<label for="cars">Choose a car:</label>
<select id='cars' name='cars'>

<?php 
while(!feof($f)){
	//echo fgets($f);br();
	echo "<option value='' >"  . fgets($f) . " </option> <br>";
}
echo "</select>";
fclose($f);
?>




<hr>
<hr>

<?php
/*


<?php

include"uses.php";
$f = fopen("txt.txt","r") or die("not exist");
echo "<form method='post' action=''>";
echo "<select id='cars' name='cars'>";
while(!feof($f)){
	echo "<option value = '" . echo fgetc($f) ."'>" ;
	echo fgets($f); br();
}
hr(3);


?>

<form method="post" action="">
<label for="cars">Choose a car:</label>
<select id="cars" name="cars">
  <option value="volvo">Volovo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>



*/
?>



