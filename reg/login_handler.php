<?php
session_start();
include('../connections/connections.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($username)) {
        $_SESSION['username_error'] = "Invalid username";
        header("Location: signin.php");
        exit;
    }

    if (empty($password)) {
        $_SESSION['password_error'] = "Invalid password";
        header("Location: signin.php");
        exit;
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (!$result || mysqli_num_rows($result) != 1) {
        $_SESSION['error_message'] = " * Invalid Username or Password";
        header("Location: signin.php");
       exit;
       }
    }
    
    header("Location: ../home.php");
    exit;