
 <html>
      <head>
    <title>userr</title>
  </head>
  <body>

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);


function forget()
{ 
        $name = $_POST['fname'];
        $pass = $_POST['pass'];
        $bdat = $_POST['bdate'];
        $row= 0;
        
        $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
        mysqli_query($con,"USE id3579286_carrental");
	    
	    $row = mysqli_query($con,"SELECT * FROM admin WHERE aname = '$_POST[fname]' AND dob = '$_POST[bdate]'");
            
          if(mysqli_num_rows($row) != 0)
         
         {
             
	$query1= "update admin set password='$pass' WHERE aname = '$_POST[fname]' AND dob = '$_POST[bdate]'";
	
	

    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");
	$data = mysqli_query ($con,$query1) or die(mysqli_error($con));
	if($data)
	{
	echo "PASSWORD IS SET....";
	echo "<script> location.href='adminlog.html'; </script>";
	}
         }


	    else
	     {
	    
		    echo "SORRY PLEASE RETRY...";
		    echo "<script> location.href='aforgotpassword.html'; </script>";
	
    
        }
    

}
if(isset($_POST['submit']))
{
	forget();
}

?>
       </tr>
     </table>
  </body>
 </html>