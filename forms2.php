<html>
 <body>
 <h2>Handling User Input</h2>
 <form method="POST" action="">
 <label>Date <input type="date" placeholder="dd-mm-yyyy" min="1996-01-01" max ="2022-12-01" </label><br>
 <label>Hidden data: <input type="hidden" name="hide" value="feedback form"/></label><br />
 <label>User ID: <input type="text" name="name" > </label><br />
 <label>Password: <input type="password" name="pass" /></label><br />
 <label>Gender: <input name="r" type="radio" value="Male" />Male
 <input name="r" type="radio" value="Female" />Female </label><br />
 <label>Select Car Model:
 <input name="check1" type="checkbox" value="Mercedes">Mercedes
 <input name="check2" type="checkbox" value="BMW">BMW
 <input name="check3" type="checkbox" value="Toyota">Toyota
 </label><br />
 <label> Birthday: Day:
 <?php
 echo "<select name='day'>";
 $day=1;
 while($day<=31)
 {echo "<option value='$day'>".$day."</option>";
 $day++;}
 echo "</select>";
 echo "Month:";
 echo "<select name='month'>";
 $month=1;
 while($month<=12)
 {echo "<option value='$month'>".$month."</option>";
 $month++; }
 echo "</select>";
 echo "Year:";
 echo "<select name='year'>";
 $year=1900;
 while($year<=2000)
 { echo "<option value='$year'>".$year."</option>";
 $year++; }
 echo "</select>";
 ?>
</label> <br />
 <label> country:
 <select name='country'>
 <option>Jordan</option>
 <option>Oman</option>
 <option>USA</option>
 <option>UAE</option>
 <option>KSA</option>
 <option>China</option>
 <option>Egypt</option>
 </select> </label><br />
Comments:<br />
 <textarea name="txt" cols="20" rows="5">Enter your
comments</textarea>
 <br /><br />
 <input type="Submit" value="Send">
 <input type="reset" value="Clear">
 </form>
 </body>
</html>



<?php
 echo "Welcome ". $_REQUEST["name"]."<br />";
 echo "Your Password is: ". $_REQUEST["pass"]."<br />";
 echo "Your birthday " . $_REQUEST["day"]. "
/".$_REQUEST["month"]." /".$_REQUEST["year"]."<br>";
 if(isset($_REQUEST["r"])) {
 echo "Your Gender is: ". $_REQUEST["r"]."<br>";}
 echo "You are from " . $_REQUEST["country"]."<br>";
 echo "You select the following car model(s): <br /> ";
 if(isset($_REQUEST["check1"]))
 {echo $_REQUEST["check1"]."<br>";}
 if(isset($_REQUEST["check2"]))
 {echo $_REQUEST["check2"]."<br>";}
 if(isset($_REQUEST["check3"]))
 {echo $_REQUEST["check3"]."<br>";}
echo "You enter the following comments: <br /> ".
$_REQUEST["txt"]."<br>";
 ?>
