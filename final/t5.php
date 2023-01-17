<?php
include("../uses.php");

//array

$Concerts = array("Jimmy Buffett", "Chris Isaak", "Bonnie
Raitt","James Taylor", "Alicia Keys");

print_r($Concerts); br(2);
$Concerts[2] = "Joe Cocker";
$Concerts[3] = "Van Morrison";

print_r($Concerts); br(2);

echo count($Concerts);


?>