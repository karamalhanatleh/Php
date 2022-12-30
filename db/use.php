<?php

function connect(){
	$conn = mysqli_connect("localhost",'root' ,'','db_karam')
	or die ("error conection");
	return $conn;
};
function disconnect($conn){
	mysqli_close($conn);
}

function query($conn, $q){
	$result=  mysqli_query($conn, $q);
	return $result;
}

?>
