<?php
//form

$t = time();

session_start();

if(isset($_POST['show'])){
	show();
}

if(isset($_POST['insert'])){
	insert();
	echo "insertet rows finish !";
}
if(isset($_POST['delete'])){
	delet();
	echo "delet rows ";
	
}
if(isset($_POST['update'])){
	update();
	echo "update rows !! \n ";
	
}




echo "<br> <b style='font-size:40px'><a href='t10.php'>Back </a> </b>";





?>




<?php
function insert(){
	$t = time();
   $f= fopen('log.txt' ,"a");
	$conn =  mysqli_connect("localhost","root","","train") or die("Error connecting to the DB!!!!!");
	

	$q="insert into data (Name ,Age , Gender) values('$_POST[name]',$_POST[age] , '$_POST[g]' ) ";
	$result= mysqli_query($conn ,$q);
	
	
	
	fwrite($f,"\n $t insert : " . $q );
	show();
	mysqli_close($conn);
	
}

function show(){
	$t = time();
   $f= fopen('log.txt' ,"a");
	$conn =  mysqli_connect("localhost","root","","train") or die("Error connecting to the DB!!!!!");

	$q= "select * from data";
	$result = mysqli_query($conn ,$q);
	echo "<table border=5> <tr> <th> Name </th> <th> Age </th> <th>Gender </th> </tr>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr> <td> " . $row['Name'] . "</td><td>" . $row['Age'] ."</td><td>" . $row['Gender'] . "</td></tr>";
	}
	echo "</table>";
	fwrite($f,"\n $t show : " . $q );

	mysqli_close($conn);

}

function delet(){
	$t = time();
	
   $f= fopen('log.txt' ,"a");
	$conn =  mysqli_connect("localhost","root","","train") or die("Error connecting to the DB!!!!!");
	

    $q="delete from data where Name='$_POST[name]'";
	$result= mysqli_query($conn ,$q);
	
	
	
	fwrite($f,"\n $t Delete : " . $q );
	show();
	mysqli_close($conn);
	


}

function update(){
	$t = time();
   $f= fopen('log.txt' ,"a");
	$conn =  mysqli_connect("localhost","root","","train") or die("Error connecting to the DB!!!!!");
	
	$q= "update data set Age= $_POST[age] WHERE Name= '$_POST[name]' ";
	$result= mysqli_query($conn ,$q);
	
	
	
	fwrite($f,"\n $t update : " . $q );
	show();
	mysqli_close($conn);
	
	
}


?>