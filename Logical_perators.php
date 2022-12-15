<?php
$a=true && true;
echo var_dump($a);
echo "<br>";




$a=false && true;
echo var_dump($a);
echo "<br>";


$a=false && false;
echo var_dump($a);
echo "<br>";
echo "<br>";

$a=true || true;
echo var_dump($a);// bool(true)
echo "<br>";

$a=false || true;
echo var_dump($a);// bool(true)
echo "<br>";

$a=false || false;
echo var_dump($a);// bool(false)

?>