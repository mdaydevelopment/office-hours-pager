<?php
$servername = "localhost";
$username = "root";
$dbname = "doorbell";
$password = "asdfrewq1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysql_error());
}

//sets variables to insert to the database
$email = $_POST['email'];
$name = $_POST['firstname'] . " " . $_POST['lastname'];
$isAdmin = false;
echo "connected successfully";

//sets info for the user, sets a default password, 
//needs to send an email to the 
$sql="INSERT INTO users($email, name, isAdmin, userpassword) 
VALUES ('".$email."','".$name."','".$isAdmin."','"pass1234"')";

if(mysqli_query($conn, $sql)) {
    echo "added successful";
    header("Location: http://idk");
} else {
    die("ERROR: " . mysql_error());
}

mysql_close($conn)

?>