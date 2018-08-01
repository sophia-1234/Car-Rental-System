<html>
      <head>
    <title>delete</title>
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


function delete()
{	
	$modelname= $_POST['model'];
	$brand= $_POST['brand'];
	


    $query = "DELETE from car where  modelname= '$_POST[model]' AND brand = '$_POST[brand]'";
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");


	$data = mysqli_query ($con,$query) ;
	
	if($data)
	{
	echo "successfully deleted...";
	echo "<script> location.href='adminlogged.html'; </script>";
	}

	else
	{
		echo "NOT DELETED";
		echo "<script> location.href='deletecar.html'; </script>";
    }
    

}

if( empty($_POST['model']) || empty($_POST['brand']))
{

		echo "CANNOT DELETE";
		echo "<script> location.href='adminlogged.html'; </script>";
    


}


if(isset($_POST['delete']))
{
	
    delete();

	
	
}
           ?>
         </tr>
     </table>
  </body>
 </html>



