<?php
//String Functions:
include("../uses.php");


$s1 ="123456789";
echo strlen($s1);br();

$s2="  A";
echo strlen($s2);br();

$s3="ahmad ali khaled";
echo str_word_count($s3);br();

$s4="ahmad ali 00";
echo str_word_count($s4);br();

$s5="0123456789";
echo strpos($s5,"3");br();

$s5="0123456789";
echo strpos($s5,"789");
br();

$s6="Karam Suleiman";
echo substr_replace($s6,"W",7);br();

$s5="0123456789";
echo substr_replace($s5,'AAAAAAAAAAA',3,7);br();

echo substr_replace($s5,'Q',3,-1);br();

echo substr_replace($s5,'AA',3);br();

echo substr_replace($s5,'AA',3,4);br();

echo substr_replace($s5,'AAAAAA',3,4);br();
echo("<hr>");br(2);

$ConfusingText = "tHIs seNTEnCE iS HArD to rEAD.";
 echo "ucfirst: " . ucfirst($ConfusingText) . "<br />\n";
 echo "lcfirst: " . lcfirst($ConfusingText) . "<br />\n";
 echo "ucwords: " . ucwords($ConfusingText) . "<br />\n";
 $LowercaseText = strtolower($ConfusingText);
 echo "ucfirst: " . ucfirst($LowercaseText) . "<br />\n";
 echo "lcfirst: " . lcfirst($LowercaseText) . "<br />\n";
 echo "ucwords: " . ucwords($LowercaseText) . "<br />\n";
br(3);

echo md5("Karam Suleiman");br();
echo md5("Karam Suleiman");br();
echo md5("12");br();
echo md5("13");br();
br(2);

$Email = "president@whitehouse.gov";
echo strrchr($Email, ".");br();

$em="aaaa@gmail.com";
echo strrchr($em,"@");br();

$num="962777502436";
echo strchr($num , "7");br();

echo strrev($s5);br(3);

$x="H E L L O T H E I R ";
echo strlen($x);
echo "<br/>".strlen(rtrim($x));br(2);


echo strcmp("Dan","Don");br();
echo strcmp("123","124");br();

echo strcmp("123","12");br();
echo strcmp("123","1234");br();
echo strcmp("1234","1");br();
echo strcmp("55","33");br();
echo str_replace("world","Person","Hello world!");br();

echo str_replace("Karam",'Ali','Karam Suleiman');
br(25);
?>

