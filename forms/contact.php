<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
$sql = "INSERT INTO enquery(name,email,subject,message)
VALUES ('$name', '$email', '$subject','$message')";


  
 if ($conn->query($sql) === TRUE) {
    echo "successfully added record";
    $_GET['sent-message']='sent-message';
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
?>
