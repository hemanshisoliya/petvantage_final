<?php
session_start();

// check if user session exists
if (!isset($_SESSION['name']) || empty($_SESSION['name'])) {
    // no session — redirect to login page
     echo "<script>window.location='PetLogin.php';</script>";
    exit;
}
?>