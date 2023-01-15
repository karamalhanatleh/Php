<?php
$dblink = mysqli_connect('localhost' ,'root' , '' ,'db_karam') or die("could not connect to db");
extract($_REQUEST);
$result = mysqli_query($dblink , "select * from t1 where id=$id");
echo "<br>";

$row=mysqli_fetch_array($result);
?>

<form name="EditForm" action="e3.php" method="post">
<table>
	<tr><th>ID:</th><th><input type="tezt" name="id" value="<?php echo $row[0]; ?>"</th></tr>
	<tr><th>Name:</th> <th> <input type="text" name="name" value="<?php echo $row[1]; ?>"/> </th> </tr>
	<tr><th>Salary:</th><th> <input type="text" name="salary" value="<?php echo $row[2]; ?>"/> </th> </tr>
	<tr><th>Country:</th><th> <input type="country" name="country" value="<?php echo $row[3]; ?>"/> </th> </tr>
		
		</table></br>
	<input type="submit" name="submit" value="Update" />
	</form>
<?php
	mysqli_close($dblink);
?>