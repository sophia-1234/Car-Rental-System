<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'id3579286_carrental');
define('DB_USER','id3579286_reshmaroy');
define('DB_PASSWORD','reshmaroy');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
$db=mysqli_select_db($con,DB_NAME);

  $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
    mysqli_query($con,"USE id3579286_carrental");



$sql = "SELECT uid, first_name, last_name,birthdate,contact_no FROM usereg";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>birthdate</th><th>contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["uid"]. "</td><td>" . $row["first_name"]."</td><td>". $row["last_name"]."</td><td>". $row["birthdate"]."</td><td>". $row["contact_no"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$con->close();
?>

</body>
</html>