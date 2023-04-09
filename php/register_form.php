<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kwaratech";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve user input from the form
$fullname = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];

// SQL query to insert data into the table
$sql = "INSERT INTO 6weeks (name, email, number) VALUES ('$fullname', '$email', '$phone')";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
header('Location: https://paystack.com/pay/kwaratech')
?>
