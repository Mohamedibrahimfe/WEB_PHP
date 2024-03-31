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
if (isset($_POST['submit']) && $_POST['submit'] == 'Sign In') {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Hash the password for comparison (assuming passwords are hashed in the database)
  $hashed_password = password_hash($password, PASSWORD_DEFAULT); // For demonstration only, don't store raw passwords

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verify password (assuming hashed passwords)
    if (password_verify($password, $row['password'])) {
      // Login successful, start a session or redirect with a success message (example)
      session_start();
      $_SESSION['username'] = $username;
      header("Location: ../home.php"); // Replace with your desired success page
      exit();
    } else {
      echo "Invalid username or password";
    }
  } else {
    echo "Invalid username or password";
  }
}

mysqli_close($conn);