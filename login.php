<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "MHTechin";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['username'];
$pass= $_POST['password'];
$sql = "INSERT INTO login (username,password) VALUES ('$user','$pass')";
if ($conn->query($sql) === TRUE) {
    echo "Form data submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    // if ($username == "your_username" && $password == "your_password") {
    //     header("Location: welcome.php");
    //     exit;
    // } else {
    //     echo "Invalid username or password. Please try again.";
    // }

?>
