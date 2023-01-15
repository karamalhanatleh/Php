<?php
/*
 1. connect to db 
 2. run sql_regcase
 3. print result
 4. close connection
*/

//include("use.php");
//$connect=connect();


$dblink= mysqli_connect('localhost', 'root' , '' ,'db_karam');
$sqlquery = 'select * from t1';

if($result=mysqli_query($dblink , $sqlquery)){
	?>
	<table border='1'>
	<tr>
	<th>ID</th><th>Name</th> <th>Salary</th> <th>Country</th>
	</tr>
<?php
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td> <td>" . $row['name'] . "</td><td>" . $row['salary'].
			'</td><td>' . $row['country']  . '</td>' ;             
		echo "</tr>";
	}
	echo "<br>";
	echo "number of rows selected is " . mysqli_num_rows($result);
	}
mysqli_close($dblink);
$trans="record were displayes \n";
$myfile='log.txt';
$hundle =fopen($myfile ,'a+') or die ("can't open file");
fwrite($hundle , $trans); 
fclose($hundle);


?>