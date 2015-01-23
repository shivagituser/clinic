<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic";

$na=$_REQUEST["name"];
$ma=$_REQUEST["email"];
$su=$_REQUEST["subject"];
$ms=$_REQUEST["msg"];

echo "Your name is :",$na,"<br>";
echo "Email is:",$ma,"<br>";
echo "Subject is :",$su,"<br>";
echo "Message is: ",$ms,"<br>";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact (Name,Email,Subject,Message) VALUES ( '$na', '$ma','$su', '$ms')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>