<?php

session_start();

if(!isset($_SESSION['PN_login'])){
    header('location: login.php');
    
}

?>