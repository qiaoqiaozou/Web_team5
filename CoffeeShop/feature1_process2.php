
<?php
$title = "Log_In";
$md="Please use appropriate meta Description";
include 'header.php'; ?>

<?php 
/* 
The isset() function is used to check if a variable is set and not NULL. In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
// Check if the form is submitted
if (isset($_POST['register'])) {
    // data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // if I have that confirmed password
    /*
    if ($password !== $confirmPassword) {
        echo "Error: Passwords do not match";
        break;
    }
    */
    // database
    include 'db.php'; 

    // SQL 
    $sql = "INSERT INTO register_info (fullname, email, password, phone) VALUES ('$fullname', '$email', '$password', '$phone')";

    // 
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // 
    $conn->close();
}

?>

<?php include 'footer.php'; ?>