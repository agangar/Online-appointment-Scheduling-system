<html>
<head>
</head>
<body background="bg.jpg">
<?php
mysql_connect("localhost","root") or die(mysql_error());

$db_name="anand";
mysql_select_db($db_name) or die(mysql_error());

$a=$_GET["did"];
$b=$_GET["Dpass"];
$query="select * from doctor where did='$a' and pass='$b'";
$result=mysql_query($query);
echo "Your Details";
if(mysql_num_rows($result)>0){
echo "<table border=2>
<tr>
<th>Doctor name</th>
<th>Address</th>
<th>Pin code</th>
<th>Doctor Type</th>
<th>Gender</th>
<th>Age</th>
<th>Email id</th>
<th>Qualification</th>
<th>Specialization</th>
<th>Experience</th>
</tr>";
while($row=mysql_fetch_array($result)){
echo "<tr><td>".$row['name']."</td>";
echo "<td>".$row['daddr']."</td>";
echo "<td>".$row['pin']."</td>";
echo "<td>".$row['Type']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "<td>".$row['page']."</td>";
echo "<td>".$row['mail']."</td>";
echo "<td>".$row['sym']."</td>";
echo "<td>".$row['spec']."</td>";
echo "<td>".$row['exp']."</td></tr>";

}
echo "</table>";
}
else{echo "no results";}


echo "Your Appointments:";
$query="select * from patient where did='$a'";
$result=mysql_query($query);
if(mysql_num_rows($result)>0){
echo "<table border=2>
<tr>
<th>Patient name</th>
<th>Address</th>
<th>Gender</th>
<th>Age</th>
<th>Email id</th>
<th>sym</th>
<th>Appointment date</th>
<th>Time</th>
</tr>";
while($row=mysql_fetch_array($result)){
echo "<tr><td>".$row['pname']."</td>";
echo "<td>".$row['addr']."</td>";
echo "<td>".$row['Gender']."</td>";
echo "<td>".$row['page']."</td>";
echo "<td>".$row['mail']."</td>";
echo "<td>".$row['sym']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['time']."</td></tr>";

}
echo "</table>";
}
else{echo "no results";}



mysql_close();
?>
