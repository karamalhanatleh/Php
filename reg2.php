<?php
include("../uses.php");

br();
 $reg="/^abcd[ ]ert/";
 $y="abcdert";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^abcd[ ]ert/";
 $y="abcd ert";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";




br();
 $reg="/^Hello/i";
 $y="hello@";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/^Hello/i";
 $y="hello@";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^Hello/";
 $y="hello@";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^hello[@]/";
 $y="hello@";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^hello[@]/";
 $y="hel/lo";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";




br();
 $reg="/^hel\/lo/";
 $y="hel/lo";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/^hel\/lo/";
 $y="hel/lo";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^hel\/lo/";
 $y="hello";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";

br();
 $reg="/[^123]/";
 $y="1234567";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/[^123]/";
 $y="123";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/[^123]/";
 $y="1234567";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";




br();
 $reg="/[^hello]/";
 $y="hello";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^hi|hello$/";
 $y="hi hello";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";



br();
 $reg="/^.{4}$/";
 $y="aaaa";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";


br();
 $reg="/^.{4}$/";
 $y="aaa";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";




br();
 $reg="/^.$/";
 $y="a";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";





br();
 $reg="/^.$/";
 $y="aaaa";
 if (preg_match($reg,$y))
 echo "Match";
 else
 echo "No match";












?>