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
	else
	{
	    echo "TRAY AGAIN";
	    /*readfile('signup.html');*/
	}
	
	

}


if(isset($_POST['submit']))
{
	
    newuser();
	
	
}
           ?>
         </tr>
     </table>
  </body>
 </html>



