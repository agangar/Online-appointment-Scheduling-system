<html>
<head>
</head>
<body bgcolor="lightblue">
<?php
mysql_connect("localhost","root") or die(mysql_error());

$db_name="anand";
mysql_select_db($db_name) or die(mysql_error());

$a=$_GET["did"];
$b=$_GET["bday"];
$c=$_GET["at"];
$d=$a.$b.$c;
$query="insert into appoint values('$a','$b','$c')";
mysql_query($query) or die(mysql_error());
echo "<br>"."Appointment Available";
?>



<form name="registration" action="insert1.php" onsubmit="return Validate()">
<fieldset>
<legend align="center"><h1>Personel details of Patient</h1></legend>
<table border=0 width="100%">
<tr>
        <td align="left"><label><h3> Patient Id:</h3></label></td>
        <td align="left"> <?php echo "<input type='hidden' name='pid' value=$d>".$d; ?></td>
</tr>

<tr>
        <td align="left"><label><h3> Password</h3></label></td>
        <td align="left"><input type="password"   name="pass" maxlength="12" placeholder="Enter Password" autofocus=""></td>
</tr>

<tr>
        <td align="left"><label><h3>Name</h3></label></td>
        <td align="left"><input type="textbox"   name="pname" size="10" maxlength="30"  placeholder="Enter Full Name" autofocus=""></td>
</tr>

<tr>
       <td align="left" valign="top"><label><h3>Address</h3></label></td>
       <td align="left"><textarea name="addr" rows="5" cols="60" placeholder="Enter Address" autofocus=""></textarea></td>
</tr>

<tr>
       <td align="left" valign="top"><label><h3>Gender:</h3></label></td>
       <td align="left"> <input type="radio" name="Gender" value="Male">Male<br>
			 <input type="radio" name="Gender" value="Female">Female<br>
			 <input type="radio" name="Gender" value="Other">Other</td>
</tr>
<tr>
        <td align="left"><label><h3>AGE</h3></label></td>
        <td align="left"><input type="textbox"   name="page" placeholder="Enter AGE" autofocus=""></td>
</tr>

<tr>
        <td align="left"><label><h3>Email ID</h3></label></td>
        <td align="left"><input type="textbox"   name="mail" placeholder="Enter Email-ID" autofocus=""></td>
</tr>


<tr>
       <td align="left" valign="top"><label><h3>Symptoms</h3></label></td>
       <td align="left"><textarea   name="sym" rows="5" cols="60" placeholder="Enter Symptoms" autofocus=""></textarea></td>
</tr>

<tr>
        <td align="left"><label><h3> Doctor Id:</h3></label></td>
        <td align="left"><?php echo "<input type='hidden' name='did' value=$a>".$a; ?></td>
</tr>

<tr>
        <td align="left"><label><h3> Appointment Date:</h3></label></td>
        <td align="left"><?php echo "<input type='hidden' name='date' value=$b>".$b; ?></td>
</tr>
</table>
<?php echo "<input type='hidden' name='time' value=$c>" ?>
 </fieldset>
 <center>
 <input type="submit" name="submit" value="SUBMIT">
 <input type="reset" name="reset" value="RESET">
 </center>
</form>
<script>
var pid=document.registration.pid;
var pass=document.registration.pass;
var pname=document.registration.pname;
var age=document.registration.page;
var mail=document.registration.mail;
var sym=document.registration.sym;

function Validate()
{
 if(validpid(pid,5,35))
	if(validpass(pass,7,12))
		if(validpname(pname))
					if(validage(age))
						if(validmail(mail))								
							    if(validsym(sym))
									{return true;}
}

function validpid(pid,a,b)
{
 	if(pid.value.length==0||pid.value.length<a||pid.value.length>b)
		{alert("Enter valid Patient id between"+a+" and "+b+" "+pid.value);
		 pid.focus();
		 return false;
		}
	return true;
}
function validpass(pass,a,b)
{
 	if(pass.value.length==0||pass.value.length<a||pass.value.length>b)
		{alert("Enter valid password between"+a+" and "+b);
		 pass.focus();
		 return false;
		}
	return true;
}

function validpname(pname)
{
	var patt=/^[A-Z a-z]+$/;
	if(pname.value.length>0 && pname.value.match(patt))
	{
	return true;
	}
	else
	{
	alert("ENTER VALID NAME NO SYMBOLS AND NUMBERS ALLOWED");
	pname.focus();
	return false;
	}
}

function validage(age,a,b)
{
	var patt=/^[0-9]+$/;
	if(age.value.length!=0 && age.value.match(patt))
	{return true;}
	else
	{
	alert("ENTER VALID AGE");
	age.focus();
	return false;
	}
}

function validmail(mail)
{
	var patt=/^[A-Z a-z 0-9_\.\-]+\@([a-z A-Z 0-9]+\.)+([a-z A-Z]{2,3}$)/;
	if(mail.value.length>0 && mail.value.match(patt))
	{
	return true;
	}
	else
	{
	alert("ENTER VALID Email ");
	mail.focus();
	return false;
	}
}


function validsym(sym)
{
	var patt=/^[a-z A-Z 0-9]+$/;
	if(sym.value.length>0 && sym.value.match(patt))
	{
	return true;
	}
	else
	{
	alert("ENTER SYMPTOMS address NO SYMBOLS ALLOWED");
	sym.focus();
	return false;
	}
}
</script>
</body>
</html>	

