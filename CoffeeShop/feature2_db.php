<?php
$servername = "web-dev-env-main-db-1";
$username = "app1";
$password = "password";
$dbname = "app1";


//$servername = "localhost";
//$username = "ni23000";
//$password = "2TbIgJyZ";
//$dbname = "wp_ni23000";


// create databse connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn -> connect_error){
    die("Connection Failed:". $conn -> connect_error);
}

?>
