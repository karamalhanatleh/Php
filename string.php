<?php
include "uses.php";
echo strlen("ALhanatleh");br(2); // outputs 10

echo strlen("Hello world!"); br(); // outputs 12

echo strlen("123456789"); br(); //9

$x="Karam Suleiman";
if(strlen($x)>10){
	echo "is string '$x ' big" ; br();
}
else{echo "is string /'$x /' not big" ; br(); }

$w="Karam Suleiman ALhanatleh";
echo "is count ' $w ' is " . str_word_count($w);br();

$w2=array("Karam","Ali" ,"sanad" ,"omar");
$w3=implode(" ", $w2);
echo $w3; br();

echo "is count ' $w3 " . str_word_count($w3);br();

echo strpos("Welcome to PHP","PHP");br();

echo "$w " .  strpos($w ,'am');br();

// substr_replace

hr();

echo $w; br();
echo substr_replace($w ,'man',1); br();

$num="1234567890";
echo $num;

echo substr_replace($num ,'000',1); br();
echo substr_replace($num ,'000',9); br();
echo substr_replace($num ,'000',4); br();

hr(1);

echo $w; br();
$w_lc=  lcfirst($w);

echo $w_lc; br();

echo ucfirst($w_lc); br();

$w_sl =strtolower($w);
echo $w_sl; br();
echo ucwords($w_sl); br();

echo strtoupper($w_sl); br();
br(2);
$ConfusingText = "tHIs seNTEnCE iS HArD to rEAD.";
echo "ucfirst: " . ucfirst($ConfusingText) ; br();
echo "lcfirst: " . lcfirst($ConfusingText) ;br();
echo "ucwords: " . ucwords($ConfusingText) ;br();
$LowercaseText = strtolower($ConfusingText);br();
echo "ucfirst: " . ucfirst($LowercaseText) ;br();
echo "lcfirst: " . lcfirst($LowercaseText) ;br();
echo "ucwords: " . ucwords($LowercaseText) ;br();
br(2);
hr();

br();
echo $w; br();

echo substr($w ,4); br();
echo substr($w ,6 ,12); br();

echo substr($w , -10 ); br();

echo substr($w , -10 ,4); br(2);

echo $num; br();
echo substr($num ,-5); br(2);

hr(); br();

// md5 
echo $num ; br();
echo md5($num); br();

echo $w; br();
echo md5($w); br();

echo md5("1") ; br(2);

hr(); br();

// strrchr
 
$email = "Alhanatleh@gmail.com";
echo strrchr($email, "."); br();

echo strrchr($email ,'@'); br();

$nt="00962777502436";
echo strrchr($nt  , '962'); br(2);

hr(); br();

// strrev 
echo $num;  br();
echo strrev($num); br(2);

echo $w; br();
echo strrev($w);

hr(); br();


// rtrim() ltrim()

$q1=" Karam  ";
echo $q1; echo strlen($q1); br();

echo "rtrim : " .  strlen(rtrim($q1)); br(); 

echo "ltrim : " . strlen(ltrim($q1)); br(2);


hr(); br();





// strcmp
echo strcmp("Dan","Don"); br() ;

echo strcmp("ABCD","ABCd"); br() ;

echo strcmp("123","123"); br() ;

echo strcmp("Ali","Ali!!"); br() ;

echo strcmp("Ali!!","Ali"); br() ;

echo strcmp("ACZ","ADA"); br(); br() ;

echo strcmp("Dan","Don"); echo "<br/>";

echo strcmp("Don","Dan");echo "<br/>";

echo strcmp("Don","Don");echo "<br/>";

echo strcmp("Donald","Don"); echo "<br/>";

echo strcasecmp("DON","don"); br(2);


hr(); br();


// {}

$x="Tennis";
echo "The name of the game is $x ball <br>";
echo "The name of the game is {$x}ball "; br(2);

hr(); br();


// isset()

$x=6;
if(isset($x)) {
 echo "$x";
	}
 else{ echo "No x"; }

br(); 

 if(isset($y)) 
 { echo "$y"; }
 else { echo "No y"; }










br(20);
?>


















