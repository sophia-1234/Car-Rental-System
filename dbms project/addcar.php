<?php




define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);


 if( !empty($_POST['model']) && !empty($_POST['brand']) && !empty($_POST['color']) && !empty($_POST['pass']) && !empty($_POST['rate']) ) 
    {
        $model = $_POST['model'];
	$brand = $_POST['brand'];
	$color = $_POST['color'];
	$pass =  $_POST['pass'];
	$rate=$_POST['rate'];





if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['fileupload']['tmp_name'])) 
{
 $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");
	
    $imgData =addslashes(file_get_contents($_FILES['fileupload']['tmp_name']));
    //$imageProperties = getimageSize($_FILES['fileupload']['tmp_name']);
    $sql = "INSERT INTO car(modelname,brand,color,passsengers,image,car_rate) VALUES($model,$brand,$color,$pass'{$imgData}',$rate)";
    $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");
	$data = mysqli_query ($con,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
    if(isset($data))
    {
    echo "car added";

    }
    
}
}
}
    else
      echo "try again";

    





?>