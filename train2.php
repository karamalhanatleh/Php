<?php
$f =fopen('web2log.log' ,'a');
if(isset($_POST['select'])){
	list_users();
	fwrite($f ,time() . ": user check list \n ");
}elseif(isset($_POST['insert'])){
insert_user();}
elseif(isset($_POST['update'])){
update_user();}
elseif(isset($_POST['delet'])){
delet_user();}

	



?>


<?php
function list_users(){
	$con = mysqli_connect("localhost" , 'root' ,'' , 'train');
	$q= 'select * from users';
	$result = mysqli_query($con , $q);
	
	echo "<table border='1'> <tr><th>id</th> <th>Name </th> <th> password </th></tr>";
	
	while($row= mysqli_fetch_assoc($result)){
		echo "<tr><td> " . $row['id'] . "</td><td> " . $row['name'] . "</td><td>" . $row['password'] . "</td></tr>";
	}
	echo "</table>";
	mysqli_close($con);
	//echo "<br> <a href='train.php> Back </a> ";

}

function insert_user(){
	global $f;
	$con = mysqli_connect("localhost" , 'root' ,'' , 'train');
	
	$q= "insert into users (id , name , password) values($_POST[id] ,'$_POST[name]' , '$_POST[password]' )";
	$result = mysqli_query($con , $q);
	$x = mysqli_affected_rows($con);
	if($x>0){ echo "rows were inserted successfully";
	fwrite($f,time() . ": insert : The user ran the following query: $q \n");
	}
	else {echo "nothing !!!!";}
	
	mysqli_close($con);
	list_users();	
}

function update_user(){
	global $f;
	$con = mysqli_connect("localhost" ,'root' , '' , 'train') or die ("Error connect db!!!");
	$q= "update users set password  = '$_POST[password]' where id=$_POST[id]";
	$result=mysqli_query($con, $q);
	if(($x=mysqli_affected_rows($con)) > 0){
    echo "$x rows were affected"; }
	fwrite($f,time() . ":Update : The user ran the following query: $q \n");
	mysqli_close($con);
	list_users();

}

function delet_user(){
		global $f;

	$con = mysqli_connect("localhost" ,'root' , '' , 'train') or die ("Error connect db!!!");
	$q = "delete from users where id =$_POST[id]";
	$result=mysqli_query($con, $q);
	$x = mysqli_affected_rows($con);

	if($x>0){
		    echo "$x rows were affected";
			fwrite($f,time() . " delet : The user ran the following query: $q \n");

			}
	else{echo "No rows were affected"; }
	mysqli_close($con);
	list_users();
	
}





 echo "<br> <b><a href='train.php'>Back </a> </b>";
?>
