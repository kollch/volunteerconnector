<?php
session_start();

include 'database_creds.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
  die(mysqli_connect_error());
}

$title = mysqli_real_escape_string($conn, $_POST['event-name-input']);
$location = mysqli_real_escape_string($conn, $_POST['event-location-input']);
$date = mysqli_real_escape_string($conn, $_POST['event-date-input']);
$time = mysqli_real_escape_string($conn, $_POST['event-time-input']);
$description = mysqli_real_escape_string($conn, $_POST['event-description-input']);
$name = $_SESSION['username'];

$sql = "INSERT INTO Post (title, location, name";
if (!empty($date)) {
  if (!empty($time)) {
    $datetime = $date . ' ' . $time;
  } else {
    $datetime = $date;
  }
  $sql .= ", date";
}
if (!empty($description)) {
  $sql .= ", description";
}
$sql .= ") VALUES ('" . $title . "', '" . $location . "', '" . $name;
if (!empty($date)) {
  $sql .= "', '" . $datetime;
}
if (!empty($description)) {
  $sql .= "', '" . $description;
}
$sql .= "');";

if (!mysqli_query($conn, $sql)) {
  die("Failed to create your post. Please try again or contact an administrator.");
}
mysqli_close($conn);
header('Location: account.php');
?>
