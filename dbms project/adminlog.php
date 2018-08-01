<?php
    session_start();  
?>

 <html>
      <head>
    <title></title>
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
    //starting the session for user profile page
   /* if(!empty($_POST['name']) && !empty($_POST['pass']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
   
    {*/   
    //    session_start();  
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $row= 0;
        
        $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
        mysqli_query($con,"USE id3579286_carrental");
	    
	    $result = mysqli_query($con,"SELECT * FROM admin WHERE aname = '$_POST[name]' AND password = '$_POST[pass]'");
           
        
         if(mysqli_num_rows($result) != 0)
         {
             while($row = $result->fetch_assoc())
             {
              $_SESSION['aname'] = $row["aname"] ;
              $_SESSION['password'] = $row["password"] ;
               $_SESSION['aid'] = $row["aid"];
                $_SESSION['contact'] = $row["contact"];
                 $_SESSION['dob'] = $row["dob"];
             
               
               

             }

               echo "SUCCESSFULLY LOGGED AS ADMIN...";
              
             echo "<script> location.href='adminlogged.html'; </script>";
         }
	    /*if(!empty($row['userName']) AND !empty($row['pass']))
	    {
		    $_SESSION['userName'] = $row['pass'];
		   

	    }*/
	    else
	     {
	     session_destroy(); 
		    echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		    echo "<script> location.href='adminlog.html'; </script>";
	
    
        }
    
	    
    /*
    else 
    {
            session_destroy(); 
        echo "ENTER COMPLETE DETAILS";
        //echo "<script> location.href='adminlog.html'; </script>";
    }
*/


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