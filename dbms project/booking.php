<?php

include("userlog.php");
?>
<html>
    <body>
        <head></head>
        <title> BOOKING</title>

 <?php
        $carid = $_POST['submit1'];
        $uid = $_SESSION["uid"];
        $datefr=$_POST['datefr'];
        $dateto=$_POST['dateto'];
        
        
        if(!empty($_POST['datefr']) && !empty($_POST['dateto']))
        {
       
        $date1 = new DateTime($_POST['dateto']);   
        $date2 = new DateTime($_POST['datefr']);     
        $interval = $date1->diff($date2);
        
        
       $dif1=$interval->d;
       
       $curnt= date('Y-m-d');
       $today = new DateTime($curnt);   
    
        $td1 = strtotime($curnt);
        $final = date("Y-m-d", strtotime("+1 month", $td1));

        if(  strtotime($datefr) < strtotime($curnt) || strtotime($dateto) < strtotime($curnt)  || strtotime($dateto) < strtotime($datefr) )

        { 
           echo "ENTER VALID DATE <br> TRY AGAIN !";
        }
        else if(strtotime($dateto) > strtotime($final))
        {
            echo "BOOKINGS WITHIN ONE MONTH IS ONLY POSSIBLE <br> TRY AGAIN !";
        }
       else if($dif1>7 )
        {
            echo "YOU CAN ONLY RENT FOR 7 DAYS <br> TRY  AGAIN !";
        }
        else
        {
            
           // define('DB_HOST', 'localhost');
            //define('DB_NAME', 'id3579286_carrental');
            //define('DB_USER','id3579286_reshmaroy');
            //define('DB_PASSWORD','reshmaroy');
        
            $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
            $db=mysqli_select_db($con,DB_NAME);
            $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
            mysqli_query($con,"USE id3579286_carrental");
            
            
             $r1=0;
             $r2=0;
            $q1 = "select * from booking where cid=$carid and (date_fr between '$datefr' and '$dateto') ";
            $q2 = "select * from booking where cid=$carid and (date_to between '$datefr' and '$dateto') ";    
            $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
            mysqli_query($con,"USE id3579286_carrental");
	
	
	        $data1 = mysqli_query ($con,$q1) or die(mysqli_error($con));
	        $data2 = mysqli_query ($con,$q2) or die(mysqli_error($con));
	        
	        $r1 = $data1->num_rows;
	        $r2 = $data2->num_rows;
            if($r1>0 || $r2>0)
            {
                echo "CAR NOT AVAILABLE AT REQUESTED DATE ";
            }
            
        else
        {
            
            $sql = "INSERT INTO booking (cid,uid,date_fr,date_to) VALUES('$carid','$uid','$datefr','$dateto')";
    
            //$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
            //mysqli_query($con,"USE id3579286_carrental");
	
	
	        $data = mysqli_query ($con,$sql) or die(mysqli_error($con));
            if($data)
             {
            echo "BOOKING COMPLETED";

	   
            }
            else
             {
             echo "not in database";
    
        	
             }
            
            
        }   
    }//else
       
              
    }//!empty
else
{   
echo "ENTER COMPLETE DETAILS";
}
       ?>
       </body>

</html>	
	
      
