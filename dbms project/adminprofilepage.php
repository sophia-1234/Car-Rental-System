<?php

include("adminlog.php");
?>
<!DOCTYPE HTML>

<html>

<head>

<title>Your Profile!!!</title>


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
	padding-top: 150px;
	color:white;
	

}
label2{
	font-family: verdana;
	font-size: 25px;
	padding-top: 150px;
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


</style>






<body id="body-color">
<div id="Sign-Up">


<?php
print ("
//<tr>

<form method=\"POST\" action=\"adminedit.php\">
//<td>
<center><h1>Your Profile!!!</h1>
</center>
<center><img src=\"user.png\" width=\"100\" height=\"100\" ></center>
");




$name =$_SESSION["aname"];
$id=$_SESSION["aid"];
$cno=$_SESSION["contact"];
$dob=$_SESSION["dob"];

print("
<center><label1>User Name:<input type=\"text\" value=$name readonly><br><br></center> 


<center><label2>Birthdate :<input type=\"text\" value=$dob readonly><br>
<br></center> 

<center><label3>Contact   :<input type=\"text\" name=\"cno\" value=$cno >

<label4><input  type=\"submit\" name=\"edit\" value=\"edit\" style=\"font-size:20px;\"></center>
<br><br><center><label5><input  type=\"submit\" name=\"back\" value=\"Back\" style=\"font-size:20px;\"></center>

");
?>



</form>



</table>


</fieldset>


</div>


</body>

</html>

