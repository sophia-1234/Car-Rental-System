<?php


include("adminlog.php");
?>



<!DOCTYPE html>
<html>
<body>

<?php



/*if(isset($_POST['details']))
{
        
    	echo "<script> location.href='admincustomerdetails.php'; </script>";
    	
	    
}
*/

if(isset($_POST['view']))
{
        
        /*echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";*/
    	echo "<script> location.href='adminprofilepage.php'; </script>";
    	
    	
	    
}

if(isset($_POST['car']))
{
        
    	echo "<script> location.href='aviewcar.php'; </script>";
    	
    	
	    
}

if(isset($_POST['rem']))
{
        
    	echo "<script> location.href='deletecar.html'; </script>";
    	
    	
	    
}

if(isset($_POST['sout']))
{
        
    	echo "<script> location.href='first.html'; </script>";
    	
    	
	    
}

if(isset($_POST['rate']))
{
        
    	echo "<script> location.href='modify.html'; </script>";
    	
    	
	    
}

if(isset($_POST['details']))
{
        
    	echo "<script> location.href='viewcustomer.php'; </script>";
    	
    	
	    
}



?>





</body>
</html> 
