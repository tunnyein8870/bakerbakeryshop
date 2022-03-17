<?php 
    if (!isset($_SESSION)){
        session_start(); 
    }
    if (isset($_SESSION['uname'])){
        unset($_SESSION['uname']);
        unset($_SESSION['cart']);
        header("Location:index.php");
    }
?>