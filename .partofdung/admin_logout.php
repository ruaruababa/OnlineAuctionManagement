<?php
    session_start(); 
    if(isset($_SESSION['loginOK'])){
        unset($_SESSION['loginOK']);
        header("Location:admin_login.php");
    }
?>