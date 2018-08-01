 <!DOCTYPE html>
<html>
<body>

<?php


if(isset($_POST['ladmin']))
{
    	echo "<script> location.href='adminlog.html'; </script>";
	    
}

if(isset($_POST['luser']))
{
    	echo "<script> location.href='userlog.html'; </script>";
	
    
}

if(isset($_POST['signup']))
{
    echo "<script> location.href='signup.html'; </script>";
	

    
}

?>

</body>
</html> 