<html>
<body background="bg.jpg">
<?php
mysql_connect("localhost","root") or die(mysql_error());

$db_name="anand";
mysql_select_db($db_name) or die(mysql_error());

$a=$_GET["did"];
$b=$_GET["pass"];
$c=$_GET["name"];
$d=$_GET["daddr"];
$e=$_GET["pin"];
$f=$_GET["Gender"];
$g=$_GET["page"];
$h=$_GET["mail"];
$i=$_GET["Type"];
$j=$_GET["sym"];
$k=$_GET["spec"];
$l=$_GET["exp"];
$m=$_GET["pic"];
$query="insert into doctor values('$a','$b','$c','$d','$e','$i','$f','$g','$h','$j','$k','$l','$m')";
mysql_query($query) or die(mysql_error());
echo "<br><h1>"."Successfully Registered Your login id and password are as follows ID:".$a."     PASSWORD:".$b."<br>   </h1>";
?>
</body>
</html>