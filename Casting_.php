<?php

$ts="3.5 second";
$td=55.7;
$ti=77;
$sd="22.6 double";
$si="22 int";
echo "the type of \$ts is "  .gettype($ts)."<br>";
echo "the type of \$td is " . gettype($td)."<br>";
echo "the type of \$ti is " . gettype($ti)."<br>";

settype($ts, "double");
echo "The value of \$ts is $ts <br>";

echo "sd is $sd " . gettype($sd) . "<br>";
settype($sd ,"double");
echo "sd is $sd " . gettype($sd) . "<br>";

echo ""
?>
