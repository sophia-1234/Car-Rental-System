<html>
     
 <head>
  
  <title></title>

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




              $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
              
              $mysqli_query($con,"USE id3579286_carrental");


              
      
	       
         	 
 
               
                $date1 = strtotime($date1);
 
                $date2 = strtotime($date2);
 
 
                $query =  mysql_query("SELECT * FROM `date` WHERE  (`date1`>".$date1." AND `date1`<".$date2.") OR (`date2`<".$date1.");


                if (mysql_num_rows()<1)
                     {
                          echo " the car is available";
                                           $query =mysqli_query("INSERT into `date` values ('$date1','$date2')");

                                           $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

                                           mysqli_query($con,"USE id3579286_carrental");
	                                   $data = mysqli_query ($con,$query) or die(mysqli_error($con));

         	 
 



                                                     	}

	

             	









           ?>
         </tr>
     </table>
  </body>
 </html>







