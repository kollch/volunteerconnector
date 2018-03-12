<?php
session_start();

include 'database_creds.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

function validateUser($username, $password, $conn) {
    $sql = "SELECT password FROM Charity WHERE name = '" . $username . "';";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        mysqli_free_result($result);
        $pswd = $row['password'];
        if ($password == $pswd) {
            $_SESSION['username'] = $username;
            $_SESSION['is_charity'] = 1;
            return true;
        }
    }
    $sql = "SELECT password FROM UserAccount WHERE username = '" . $username . "';";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        mysqli_free_result($result);
        $pswd = $row['password'];
        if ($password == $pswd) {
            $_SESSION['username'] = $username;
            $_SESSION['is_charity'] = 0;
            return true;
        }
    }
    return false;
}

if (validateUser($username, $password, $conn)) {
    mysqli_close($conn);
    header('Location: index.php');
} else {
    mysqli_close($conn);
    header('Location: index.php');
}
?>
