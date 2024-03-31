<?php

// Define database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit']) && $_POST['submit'] == 'Sign Up') {
  $username = mysqli_real_escape_string($conn, $_POST['signup_username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['signup_password']);

  // Hash the password before storing it in the database (recommended)
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$hashed_password' )";

  if (mysqli_query($conn, $sql)) {
    echo "Registration successful!"; // Replace with your desired success message (consider redirecting to a different page)
    header("Location: ../home.php?register=success");

  exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);