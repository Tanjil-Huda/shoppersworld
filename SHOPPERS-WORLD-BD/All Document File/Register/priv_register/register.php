<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$fulln = mysql_real_escape_string($_POST['fullname']);
	$cardn = mysql_real_escape_string($_POST['cardname']);
	$address = mysql_real_escape_string($_POST['address']);
	$city = mysql_real_escape_string($_POST['city']);
	$pos =  mysql_real_escape_string($_POST['poscode']);
	$country = mysql_real_escape_string($_POST['country']);
	$id = mysql_real_escape_string($_POST['idcard']);
	$mobile = mysql_real_escape_string($_POST['mobile']);
	$dob = mysql_real_escape_string($_POST['dob']);
	$blg = mysql_real_escape_string($_POST['bloodgroup']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$mrs = mysql_real_escape_string($_POST['meritals']);
	$tnc = mysql_real_escape_string($_POST['tnc']);
	$upfile=mysql_real_escape_string($_POST['uploadedfile']);
	$nom_name=mysql_real_escape_string($_POST['nom_name']);
	$nom_mobile=mysql_real_escape_string($_POST['nom_mobile']);
	$rel_nom=mysql_real_escape_string($_POST['rel_nom']);
    

	
	
	
	if(mysql_query("INSERT INTO swbd_privilege_regi(username,nom_name,nom_mobile,rel_nom,email,password,fullname,cardname,address,city,poscode,country,idcard,mobile,dob,bloodgroup,gender,meritals,uploadedfile,tnc) 
	VALUES('$uname','$nom_name','$nom_mobile','$rel_nom','$email','$upass','$fulln','$cardn','$address','$city','$pos','$country','$id','$mobile','$dob','$blg','$gender','$mrs','$upfile','$tnc')"))
	{
		?>
        <script>alert('You are successfully registered for Shoppers World Privilege Card');</script>
        <?php
		
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post" action="">

<table align="center" width="70%" border="0">
<tr width="50%"><td colspan="2" align="center">
<span style="font-family:Verdana;font-weight:bold;font-size:25px;color:orange;">Privilege Card Registration Form</span>
</td></tr>
<tr>
<td width="50%"><input type="text" name="fullname" placeholder="Full Name" required /></td>
<td width="50%"><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td width="50%"><input type="email" name="email" placeholder="Your Email" required /></td>
<td width="50%"><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td width="50%"><input type="text" name="cardname" placeholder="Name of Privilege Card" required /></td>
<td width="50%"><textarea name="address" placeholder="Address" required /></textarea></td>
</tr>
<tr>
<td width="50%"><input type="text" name="city" placeholder="City" required /></td>
<td width="50%"><input type="text" name="poscode" placeholder="Post Code" required /></td>
</tr>
<tr>
<td width="50%"><select name="country">
                        <option>--Select Country--</option>
                        <option>Bangladesh</option>
                    </select></td>
<td width="50%"><input type="text" name="idcard" placeholder="National ID Card" required /></td>
</tr>
<tr>
<td width="50%"><input type="text" name="mobile" placeholder="Mobile No" required /></td>
<td width="50%"><span style="font-family:Verdana, Geneva, sans-serif;font-size:12px;position:relative;left:2px;color:#3e3e3e">Date of Birth</span><input type="date" name="dob"/></td>
</tr>
<tr>
<td width="50%"><input type="text" name="bloodgroup" placeholder="Blood Group" required /></td>
<td width="50%"><select name="gender">
                        <option>--Select Gender--</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
</td>
</tr>
<tr>
<td width="50%"><span style="font-family:Verdana, Geneva, sans-serif;font-size:12px;position:relative;left:2px;color:#3e3e3e">Merital Status</span><select name="meritals">
                        <option>--Select Option--</option>
                        <option>Married</option>
                        <option>Unmarried</option>
						<option>Others</option>
                    </select></td>
<td width="50%"><span style="font-family:Verdana, Geneva, sans-serif;font-size:12px;position:relative;left:2px;color:#3e3e3e">Upload Photo & National ID Card of both side </span>
<input style="height:25px;"type="file" name="uploadedfile" required /></td>
</tr>
<tr>
<td><input type="text" name="nom_name" placeholder="Nominee Name"required/></td>
<td><input type="text" name="nom_mobile" placeholder="Nominee Mobile"required/></td>
</tr>
<tr>
<td colspan="2"><input type="text" name="rel_nom" placeholder="Relation With Nominee"required/></td>
</tr>
<tr>
<td colspan="2"><input style="width:20px;height:20px;" type="checkbox" name="tnc" required/>&nbsp; 
<span style="font-family:Verdana, Geneva, sans-serif;font-size:14px;position:relative;bottom:3px;">I have read and Agree to Shoppers World Privilege Card Membership</span></td>
</tr>
<tr>
<td><button id="signup" type="submit" name="btn-signup">Register</button></td>
</tr>

</table>

</form>
</div>
</center>
</body>
</html>