<html>
      <head>
    <title>modify</title>
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


function modify()
{	
	$modelname= $_POST['model'];
	$brand= $_POST['brand'];
	$carrate=$_POST['rate'];
    
        
	


    $query = "UPDATE car SET car_rate = '$_POST[rate]' where  modelname= '$_POST[model]' AND brand ='$_POST[brand]'";
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");

	$data = mysqli_query ($con,$query) ;
	if($data)
	{
	echo "successfully modified...";
	echo "<script> location.href='adminlogged.html'; </script>";
	}

	else
	{
		echo "SORRY ....WE DON'T HAVE THAT CAR";
		echo "<script> location.href='modify.html'; </script>";
    }
    
}

if( empty($_POST['model']) || empty($_POST['brand']))
{

		echo "CANNOT MODIFY";
		echo "<script> location.href='adminlogged.html'; </script>";
    


}
if(isset($_POST['submit']))
{
	
    modify();

}
           ?>
         </tr>
     </table>
  </body>
 </html>
