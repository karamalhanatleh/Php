<html>
<head>
<body>
<form action="i2.php" method='post'>
	<table>
	<tr><th>id:</th> <th><input type='text' name='id' /></th></tr>
	<tr><th>name:</th> <th><input type='text' name='name' /></th></tr>
	<tr><th>Salart:</th> <th><input type='text' name='salary' /></th></tr>
	</table>
	<label> Country:
		<?php
		$handle=fopen("country.txt" , "r")or exit("unable to open file!!");
		echo "<select name='country'>";
		$c=1;
		while(!feof($handle)){ ?>
		<option> <?php echo fgets($handle);?> </option>; <?php
		++$c; }
		echo "</select>";
		fclose($handle); ?>
		<br/> </br>
		<tr><th><input type="submit" value="Add New Record" /> </th></tr>
		
	</form>
	</body>
	</html>
	
		
		
		
		
		
		
		
		
		
	
	<?php
	/*
		$handle =fopen('country.txt','r');//or die("unable to open file!");
			echo "<select name='country'>";	
			while(!feof($handle)){
				echo "<option value='' >" . fgets($handle) . "</option> <br>";
			} 
			echo "</select> <br>"; 
			fclose($handle);
			*/
			
	?>
		<!--	<tr><th><input type="submit" value="add new record" /> </th></tr> -->
		

		
		
 
