<?php
include("../uses.php");
// ?=    0 or 1 


br();
 $reg="/(ali)/";
 $y="ali";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";








br();
//    0 or 1
$reg = "/[A-Z]?/";
$y="123";
echo preg_match($reg, $y);


br();
$reg = "/[a-z]?/";
$y="AA";
echo preg_match($reg, $y);



br(10);
hr();
br();
 $reg="/^m{2,}[a-c]{2}$/";
 $y="mmmmmmcb";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";








br();
 $reg="/^m{2,}[a-c]{2}$/";
 $y="mmmmmmcb";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^m{2,}[a-c]{2}$/";
 $y="mmmmmm";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/^[abcd]{2,3}/";
 $y="aabcd";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/^[abcd](abcd)/";
 $y="aabcd";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/^[abcd](abcd)/";
 $y="aabcd";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";




br(2);
 $reg="/^[A-Z]/";
 $y="sSmart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^[A-Z]/";
 $y="Smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^[A-Z]/";
 $y="smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";




br();
 $reg="/[a-t]$/";
 $y="smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";

br();
 $reg="/[a-c]$/";
 $y="smart team is very smartw";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";

br();
 $reg="/smartw$/";
 $y="smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";

br();
 $reg="/smartw$/";
 $y="smart team is very smartw";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/[smart]$/";
 $y="smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/[smart]/";
 $y="smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";

br();
 $reg="/^(smart)/";
 $y="smart team is very smart";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $y="smart team is very smart";
 $reg="/^smart/";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $y="how are you";
 $reg="/^how/";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";
?>