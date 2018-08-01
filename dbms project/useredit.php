<?php
include("userlog.php");

?>


 <html>
      <head>
    <title>userr</title>
  </head>
  <body>

<?php

/*define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');
*/

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);


function edit()
{ 
    
    if(!empty($_POST['cno']))
      {
          $id=$_SESSION['uid'];
        $cno=$_POST['cno'];
        $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
        mysqli_query($con,"USE id3579286_carrental");
	    
	   
             
	$query1= "update usereg set contact_no='$cno' WHERE uid=$id";
	
	

    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");
	$data = mysqli_query ($con,$query1);
	if($data)
	{
	echo "contact updated";
	$_SESSION['contact_no']=$cno;
	
	}
      }

	echo "<script> location.href='userprofilepage.php'; </script>";

         }


    


if(isset($_POST['edit']))
{
	edit();
}



if(isset($_POST['back']))
{
	echo "<script> location.href='userlogged.html'; </script>";
}


?>
       </tr>
     </table>
  </body>
 </html>