<?php
//Create the variables
$serverName = "localhost";
$dbuserName = "root";
$dbpassword = "";
$dbname = "eja";

//Create connection
$conn = new mysqli($serverName, $dbuserName, $dbpassword, $dbname);

//Check connection
 if ($conn->connect_error){
    die ("Connection failed: " . $conn->connect_error);
 }

 //Create and bind statements and parameters
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$stmt = $conn->prepare("INSERT INTO message(name, email, message) values(?,?,?)");
$stmt->bind_param("sss", $name, $email, $message);

//Check statement executaion

if ($stmt->execute() === TRUE){
    echo "Message sent successfully!";
}else{
    echo "Failed: " . $stmt->connect_error;
}

$stmt->close();
$conn->close();





?>