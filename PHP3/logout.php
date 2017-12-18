<?php 
    session_start();
    session_destroy();
    include("header.php"); 
    echo "<h1>Wylogowano!</h1>";
?>