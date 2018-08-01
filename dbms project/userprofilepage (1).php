<?php

include("userlog.php");
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
	padding-top: 200px;
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
	padding-top: 50px;
	color:white;
	
}
label6{
	font-family: verdana;
	font-size: 25px;
	padding-top: 50px;
	color:white;
	
	

}


</style>






<body id="body-color">
<div id="Sign-Up">



//<tr>
<form method="POST" action="useredit.php">
//<td>
<center><h1>Your Profile</h1>
</center>
<center><img src="user.png" width="200" height="200" ></center>

<?php

            $first_name = $_SESSION["first_name"] ;
                 $last_name = $_SESSION["last_name"] ;
              $password = $_SESSION["password"] ;
               $uid = $_SESSION["uid"];
                $contact_no = $_SESSION["contact_no"];
                 $birthdate = $_SESSION["birthdate"];


print ("
<center><label1>First Name:<input type=\"text\" name=\"fname\" value=\"$first_name\" readonly><br><br></center> 
<center><label2>Last Name :<input type=\"text\" name=\"lname\" value=\"$last_name\" readonly><br><br></center>
<center><label3>Birthdate :<input type=\"text\" name=\"bd\" value=\"$birthdate\" readonly><br><br></center> 


<center><label4>Contact   :<input type=\"text\" name=\"cno\" value=\"$contact_no\">

<i><label5><input  type=\"submit\" name=\"edit\" value=\"edit\" style=\"font-size:20px;\"></center></i><br>
<i><center><label6><input  type=\"submit\" name=\"back\" value=\"back\" style=\"font-size:20px;\"></center></i>
");
?>
</form>


</table>

</fieldset>

</div>

</body>

</html>
