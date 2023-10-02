<?php
session_start();
if(isset($_GET['name']) ) {
    $name = htmlspecialchars($_GET['name']);
    $notes = $_SESSION['notes'];

    if (isset($notes[$name])) {
        unset($notes[$name]);
        $_SESSION['notes'] = $notes;
    }
}
header('location:notes.php');