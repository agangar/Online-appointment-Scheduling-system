<html>
<body background="bg.jpg">
<?php
mysql_connect("localhost","root") or die(mysql_error());

$db_name="anand";
mysql_select_db($db_name) or die(mysql_error());

$a=$_GET["pid"];
$b=$_GET["pass"];
$c=$_GET["pname"];
$d=$_GET["addr"];
$e=$_GET["Gender"];
$f=$_GET["page"];
$g=$_GET["mail"];
$i=$_GET["sym"];
$j=$_GET["did"];
$m=$_GET["date"];
$k=$_GET["time"];
	if ($k == "i") 
  		$l="10:00 am to 11:00 am";
	elseif ($k == "ii")
		 $l="11:00 am to 12:00 pm";
	elseif ($k == "iii")
  		$l="4:00 pm to 5:00 pm";
	elseif ($k == "iv") 
  		$l="5:00 pm to 6:00 pm";
	else
  		$l="6:00 pm to 7:00 pm";
$query="insert into patient values('$a','$b','$c','$d','$e','$f','$g','$i','$j','$m','$l')";
mysql_query($query) or die(mysql_error());
echo "<br><h1>"."Appointment Booked Your login id and password are as follows ID:".$a."     PASSWORD:".$b."<br>   </h1>";
?>
</body>
</html>