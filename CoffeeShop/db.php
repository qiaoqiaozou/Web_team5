

<?php

$servername = "php_24-db-1";
$username = "crudAPP";
$password = "password";
$dbname = "crudAPP";


/* 最后上传shell所需个人数据库
$servername = "localhost";
$username = "pengpeng23000";
$password = "rTaPFrQ6";
$dbname = "wp_pengpeng23000";
*/

//
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("Vonnection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//$conn->close();
?>



