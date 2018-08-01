

<!DOCTYPE html>
<html>
<head>
<title> CUSTOMERS</title>
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
	.user-image {
		height: 12rem;
		width: 16rem;
		align-self:center;
	    
	}
	.name {
		text-transform: uppercase;
		font-size: 1.3rem;
	}
</style>
</head>
<body>
<div>
             <?php
              


define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
mysqli_query($con,"USE id3579286_carrental");

echo '<form method=\"POST\" action=\"adminlogged.html\">';
$sql= "select * from usereg";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo '<div class="row">'.'</div>';
			//echo '</div>';
			
  			 echo '<img src="user.png"style="width:100px;height:100px;border:0.5;">';
			
			echo '<div class="details">';
			echo '<p class="name">  User id :'.$row['uid'].'</p>';
			echo  '<p> First Name :' .$row['first_name'].'</p>';
			echo '<p>  Last Name :' .$row['last_name'].'</p>';
			echo '<p> DOB :' .$row['birthdate'].'</p>';
			echo '<p>  Contact No:' .$row['contact_no'].'</p>';

			
			echo '</form></div>';
		

		}		
	echo '</form></div>';

	}
	$con->close();
	?>
	</div>
</body>

</html>	
	

