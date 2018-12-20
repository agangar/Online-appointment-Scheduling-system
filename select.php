<html>
<head>
</head>
<body background="bg.jpg">
<?php
mysql_connect("localhost","root") or die(mysql_error());

$db_name="anand";
mysql_select_db($db_name) or die(mysql_error());

$a=$_GET["pin"];
$b=$_GET["dtype"];
$query="select * from doctor where pin='$a' and Type='$b'";
$result=mysql_query($query);

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
<th>Select Date</th>
<th>Select Time</th>
<th>Select Doctor</th>
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
echo "<td>".$row['exp']."</td>";
$a=$row["did"];
echo "<td><form name='Submiy' action='try.php'>
     <input type='date' name='bday' min='2016-10-24'>
</td>
<td width='15%' align='left'>
<input type='radio' name='at' value='i'>10:00 am to 11:00 am<br>
<input type='radio' name='at' value='ii'>11:00 am to 12:00 pm<br>
<input type='radio' name='at' value='iii'>4:00 pm to 5:00 pm<br>
<input type='radio' name='at' value='iv'>5:00 pm to 6:00 pm<br>
<input type='radio' name='at' value='v'>6:00 pm to 7:00 pm<br>
</td>
<td><input type='radio' name='did' id='id' value=$a><input type='submit' value='Select This'> <br></form></td></tr>";



}
echo "</table>";
}
else{echo "no results";}
mysql_close();
?>


</body>
</html>