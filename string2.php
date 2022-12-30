<?php
include"uses.php";

echo "<b >addcslashes</b>";br();
$str = addcslashes("Hello World!","e");
echo($str);

br();

$str2=addcslashes("Karam ALhanatleh B" ,"B");
echo($str2);
br(2);
echo "<b >addslashes</b>";br();

$str = addslashes('What does "yolo" mean?');
echo($str);

br(2);
hr();br();


// chr()
echo "<b >chr</b>";br();

echo chr(53) . "<br>"; // 
echo chr(54) . "<br>"; // 
echo chr(55) . "<br>"; // 

echo chr(052) . "<br>"; //
echo chr(053) . "<br>"; //
echo chr(054) . "<br>"; //

echo chr(0x41) . "<br>"; //
echo chr(0x42) . "<br>"; //
echo chr(0x43) . "<br>"; //


br(2);
hr();br();


// count_chars()
echo "<h2>count_chars</h2>";br();
$str = "Karam Suleiman";
echo count_chars($str,3); br();

$str = "abcdefg hjiklmo";
echo $str;br();
echo count_chars($str,3);


br(2);
hr();br();


// explode()
echo "<h2>explode</h2>";br();

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str)); br(); 

$str = "Karam.Suleiman.ALhanatleh.Burmawy.Jerash";
print_r (explode(".",$str)); 


br(2);
hr();br();


// implode()
echo "<h2>explode</h2>";br();
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);


br(2);
hr();br();


// join()
echo "<h2>join</h2>";br();
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr); br();

$arr2 = array('Karam' ,'ali' ,'omar');
echo join(" ",$arr2);




br(2);
hr();br();


// join()
echo "<h2>ord()</h2>";br();

echo ord("h")."<br>";
echo ord("C")."<br>";




br(2);
hr();br();


// join()
echo "<h2>str_replace()</h2>";br();

echo str_replace("world","Peter","Hello world!");br();

echo str_replace("Ali" , "Karam" , "Ali Suleiman");br();

echo str_replace("55" ,"22", "115599");br();



br(2);
hr();br();


// strlen()
echo "<h2>strlen()</h2>";br();
echo strlen("Hello"); br();
echo strlen('12345');br();




br(2);
hr();br();


// strpos()
echo "<h2>strpos()</h2>";br();
echo strpos("0123456789","2"); br();

echo strpos("0123456789","0"); br();
echo strpos("0123456789","012"); br();
echo strpos("0123456789","78"); br();






br(2);
hr();br();


// strrev()
echo "<h2>strrev()</h2>";br();

echo strrev("1234567890"); br();
echo strrev("ABCDEF"); br();




br(2);
hr();br();


// substr()
echo "<h2>substr()</h2>";br();
echo substr("0123456789",1); br();
echo substr("0123456789",3);br();
echo substr("0123456789",-4);br();





br(2);
hr();br();


// substr()
echo "<h2>substr()</h2>";br();
echo substr_replace("0123456789","345",7); br();
echo substr_replace("0123456789","00",7);br();
echo substr_replace("0123456789","QQ",3);



br(2);
hr();br();


// wordwrap()
echo "<h2>wordwrap()</h2>";br();
$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>\n");br(2); 

$str = "01 234 56789 ADDDD";
echo wordwrap($str,6);
br(20);
br();
br();
br();
br();


?>