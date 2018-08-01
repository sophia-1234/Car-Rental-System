<?php
include("userlog.php");
?>



<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_POST['signout']))
{
        session_destroy(); 
    	echo "<script> location.href='first.html'; </script>";
	    
}
if(isset($_POST['carimage']))
{
         
         
    	echo "<script> location.href='viewcars.php'; </script>";
	    
}


if(isset($_POST['profile']))
{
         
         
    	echo "<script> location.href='userprofilepage.php'; </script>";
	    
}

if(isset($_POST['profile']))
{
    
              
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
}

?>

</body>
</html> 
