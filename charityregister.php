<?php
session_start();

include 'database_creds.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
  die(mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_POST['charity-name-input']);
$password = mysqli_real_escape_string($conn, $_POST['charity-password-input']);
$description = mysqli_real_escape_string($conn, $_POST['charity-description-input']);
$logo = mysqli_real_escape_string($conn, $_POST['charity-logo-input']);

$sql = "INSERT INTO UserAccount VALUES ('" . $name . "', '" . $password;
if (!empty($description)) {
  $sql .= "', '" . $description;
}
if (!empty($logo)) {
  $sql .= "', '" . $logo;
}
$sql .= "');";

if (!mysqli_query($conn, $sql)) {
  die("Failed to create your account. Please try again or contact an administrator.");
}
mysqli_close($conn);
$_SESSION['username'] = $name;
$_SESSION['is_charity'] = 0;
header('Location: index.php');
?>
