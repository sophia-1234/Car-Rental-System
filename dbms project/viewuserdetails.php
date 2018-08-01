<?php
include("userlog.php");
?>
<!DOCTYPE HTML>

<html>
<head>
<title>CUSTOMER DETAILS!!!</title>
</head>

<style>

body{
background-image:url('car1.jpg');
background-position:center;
}
   h1 {
	font-family: verdana;
	font-size: 40px;
	padding-top: 50px;
	color:white;

}    

label1{
	font-family: verdana;
	font-size: 25px;
	padding-top: 25px;
	color:white;
	

}
label2{
	font-family: verdana;
	font-size: 25px;
	padding-top: 25px;
	color:white;
	

}

	
label3{
	font-family: verdana;
	font-size: 25px;
	padding-top: 25px;
	color:white;
	

}

label4{
	font-family: verdana;
	font-size: 25px;
	padding-top: 25px;
	color:white;
	
}

label5{
	font-family: verdana;
	font-size: 25px;
	padding-top: 25px;
	color:white;
	
}
label6{
	font-family: verdana;
	font-size: 25px;
	padding-top: 25px;
	color:white;
	
}






</style>


//<body id="body-color">
//<div id="Sign-Up">


<?php
print ("
<tr>

//<form method=\"POST\" action=\"adminlogged.html\">
<td>
<center><h1>Customer Details!!!</h1>
</center>

");




$fname =$_SESSION["first_name"];
$lname =$_SESSION["last_name"];
$csid=$_SESSION["uid"];
$cno=$_SESSION["contact_no"];
$dob=$_SESSION["birthdate"];



print("
<center><label1>Customer Id:<input type=\"text\" value=$csid readonly><br><br></center>
<center><label2>First Name:<input type=\"text\" value=$fname readonly><br><br></center> 
<center><label3>Last Name:<input type=\"text\" value=$lname readonly><br><br></center>
<center><label4>Birthdate :<input type=\"text\" value=$dob readonly><br><br></center> 
<center><label5>Contact   :<input type=\"text\" value=$cno readonly><br><br></center>

<center><label6><input  type=\"submit\" name=\"back\" value=\"back\" style=\"font-size:20px;\">
</center>

");
?>

</form>
</table>
</fieldset>
//</div>
</body>

</html>
