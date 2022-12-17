<?php
setcookie("professional[0]", "Don");
setcookie("professional[1]", "Gosselin");
setcookie("professional[2]", "writer");
setcookie("a1", "writer" , time()+5);
setcookie("a2", "ZZZZ" , time()+20 );


if(isset($_COOKIE["a1"])){
	echo $_COOKIE['a1'] . "<br>";
}
else {echo "is not exist !! <br>";}


if(isset($_COOKIE["a2"])){
	echo $_COOKIE['a2'] . "<br>";
}
else {echo "is not exist !! <br>";}

?>

<br><br>
<hr>
<br><br>

<?php
 setcookie("color","Red");
?>
<html>
 <head>
 <title>Setting Cookie</title>
 </head>
 <body>


 <h3>Hello world</h3>
 <?php
echo $_COOKIE["color"]."<br>";
 ?>
 </body>
</html>

<br><br>
<hr>
<br><br>


<?php
setcookie("color1","red",time()+60*60*24);
setcookie("color2","green",time()+60*60*24);
?>
<html>
<body>
<?php

print_r($_COOKIE);
?>
</body>
</html>




<br><br>
<hr>
<br><br>



<!DOCTYPE html>
<?php
    setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);
?>
<html>
<body>
    <?php
    if (isset($_COOKIE["Auction_Item"]))
    {
        echo "Auction Item is a  " . $_COOKIE["Auction_Item"];
    }
    else
    {
        echo "No items for auction.";
    }
    ?>
    <p>
        <strong>Note:</strong>
        You might have to reload the page 
        to see the value of the cookie.
    </p>
  
</body>
</html>
