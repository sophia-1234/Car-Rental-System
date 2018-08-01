<html>
    <body>
        <head></head>
        <title> BOOKING</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
<style>
	body {
		font-family: 'Roboto', sans-serif;
	}
	.row {
		display: flex;
		border: 2px solid rgba(0,0,0,0.5);
		justify-content: space-around;
	}
	
	.details {
		margin-left: 50px;
		text-transform: capitalize;
	}
	.car-image {
		height: 8rem;
		width: 12rem;
		align-self:center;
	    
	}
	.name {
		text-transform: uppercase;
		font-size: 1.3rem;
	}
	.date {
		align-self: center;
	}
</style>
</head>
<body>
<div>
 <?php
        //$carid = $_POST['submit'];
       // echo "$carid";
define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysqli_query($con,"USE id3579286_carrental");
mysqli_set_charset($con, 'utf8');
$sqlb="select cid,uid ,date_fr,date_to from booking order by date_fr desc";
			$res=$con->query($sqlb);
			while($col = $res->fetch_assoc()) {
			   $sql= "select * from car";
			   $result = $con->query($sql);
			   while($row = $result->fetch_assoc()) {
			    if($col['cid']==$row['cid']){
			         $sqlt="select uid,first_name,last_name,contact_no from usereg";
			          $resu= $con->query( $sqlt);
			          while( $tup =  $resu->fetch_assoc())
			          {
			              if($col['uid']==$tup['uid']){
			                  echo '<div class="row">';
			echo '<img src="data:img/jpeg;base64,'.base64_encode( $row['image'] ).'" alt="car-image" class="car-image"/>';
			echo '<div class="details">carid :'.$row['cid'].'</p>'; 
			echo '<p class="name"> </p>'; 
			echo '<p> Model Name :'.$row['modelname'].'</p>';
			echo  '<p> brand :' .$row['brand'].'</p>';
			echo '<p>  Color :' .$row['color'].'</p>';
			echo '<p> Passengers :' .$row['passengers'].'</p>';
			 
		
			     echo '<p>Booked From :'.$col['date_fr'].'</p>';
			     echo '<p>Booked To :'.$col['date_to'].'</p>';
			    // echo '</div class=date>';
			     
			     	echo '</div>';
			     	 echo '<div>';
			     	 echo '<p> user id :'.$col['uid'].'</p>';
			     	// echo '<br>';
			     	// echo '<div>';
			echo  '<p> first name :' .$tup['first_name'].'</p>';
			//echo '<br>';
			echo  '<p> last name :' .$tup['last_name'].'</p>';
			//echo '<br>';
			echo  '<p> contact :' .$tup['contact_no'].'</p>';
			              }

			              }
			              
			    }
			   }	echo '</form></div>';
					echo '</form></div>';
			              }

	$con->close();
	?>
	</div>
</body>

</html>	
	
       