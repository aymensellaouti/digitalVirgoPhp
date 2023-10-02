<?php
session_start();
if(isset($_POST['name']) && isset($_POST['description'])) {

$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);

if (isset($_SESSION['notes'])) {
    $notes = $_SESSION['notes'];

} else {
    $notes = [];
}
    $notes[$name] = $description;
    $_SESSION['notes'] = $notes;
}

header('location:notes.php');