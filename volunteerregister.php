<?php
session_start();

include 'database_creds.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}

$username = mysqli_real_escape_string($conn, $_POST['volunteer-username-input']);
$password = mysqli_real_escape_string($conn, $_POST['volunteer-password-input']);

$sql = "INSERT INTO UserAccount (username, password) VALUES ('" . $username . "', '" . $password . "');";
if (!mysqli_query($conn, $sql)) {
  die("Failed to create your account. Please try again or contact an administrator.");
}
mysqli_close($conn);
$_SESSION['username'] = $username;
$_SESSION['is_charity'] = 0;
header('Location: index.php');
?>
