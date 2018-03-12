<?php
session_start();
if (isset($_SESSION['username'])) {
    unset($_SESSION['is_charity']);
    unset($_SESSION['username']);
}
session_destroy();
header('Location: index.php');
?>
