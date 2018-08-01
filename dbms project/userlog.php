<?php
    session_start();  
?>

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


function SignIn()
{

      
        $name = $_POST['fname'];
        $pass = $_POST['password'];
        
        $row= 0;
        
        $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
        mysqli_query($con,"USE id3579286_carrental");
	    
	    $result = mysqli_query($con,"SELECT * FROM usereg WHERE first_name = '$_POST[fname]' AND password = '$_POST[password]'");
         if(mysqli_num_rows($result) != 0)
        {
        
        while($row = $result->fetch_assoc())
        {
         $_SESSION['first_name'] = $row["first_name"] ;
         $_SESSION['last_name'] = $row["last_name"] ;
         $_SESSION['password'] = $row["password"] ;
         $_SESSION['uid'] = $row["uid"];
         $_SESSION['contact_no'] = $row["contact_no"];
         $_SESSION['birthdate'] = $row["birthdate"];
            
           echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
              
         echo "<script> location.href='userlogged.html'; </script>";
         }
        }
	    else
	     {
	      session_destroy(); 
		    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		    echo "<script> location.href='userlog.html'; </script>";
	
    
        }

    
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
       </tr>
     </table>
  </body>
 </html>