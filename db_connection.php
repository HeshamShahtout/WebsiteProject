<?php

$servername = "localhost";
$username = "root";
$password = "9707";
$dbname = "Website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$sql = "INSERT INTO Form (`Name`,`Email`,`Website`,`Gender` "
//        . "Values ('hesham','heshams','heshameq','heshamsdam') ";


$fullName = $_POST["name"];
$Email = $_POST["email"];
$Website = $_POST["website"];
$Gender = $_POST["gender"];
$password = $_POST["pass"];
$check = "select email from Form where email='$Email'";
$result = mysqli_query($conn, $check);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($Email == $row['email']) {
        echo "Email Already Exists";
    }
} else {

    $sql = "INSERT INTO Form (name, email,password,website,gender)
VALUES
('$fullName','$Email','$password','$Website','$Gender') ";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>