 <html>
      <head>
    <title>register</title>
  </head>
  <body>
    
     <table width = 100% >
         <tr>
             <?php
              


define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);



function NewUser()
{	
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$birthdate = $_POST['bd'];
	$password =  $_POST['pass'];
	$contact=$_POST['cno'];



	$query = "INSERT INTO usereg (first_name,last_name,password,birthdate,contact_no) VALUES ('$firstname','$lastname','$password','$birthdate','$contact');";
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");
	$data = mysqli_query ($con,$query) or die(mysqli_error($con));
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	echo "<script> location.href='first.html'; </script>";
	
/*    readfile('signup.html');*/

	}

	
	

}



function SignUp()
{
    /*if($firstname || empty($lastname) || empty($birthdate) ||  empty($password) || empty($contact))
    {
        echo "enter complete details";
    }*/
    if( !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['bd']) && !empty($_POST['pass']) && !empty($_POST['cno']) ) 
    {
        
    $row=1;
       //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");
	$row = mysqli_query($con,"SELECT * FROM usereg WHERE first_name = '$_POST[fname]' AND password = '$_POST[pass]'");
    
    if(mysqli_num_rows($row) == 0)
	{
		newuser();
	}
	else
	{ echo "SIMILAR USER EXIST";
		echo "<script> location.href='signup.html'; </script>";
	
	    
	}
    }
    
	else
	{
		echo "SORRY...TRY AGAIN";
		echo "<script> location.href='signup.html'; </script>";
    }
    
    
    
}





if(isset($_POST['submit']))
{
	
        SignUp();
	
	
}
           ?>
         </tr>
     </table>
  </body>
 </html>



