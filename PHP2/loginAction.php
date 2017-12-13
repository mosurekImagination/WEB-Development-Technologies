<?php

$logins = array("admin", "Pawel", "Tomek");
$passwords = array(
    "admin" => "123456", "Pawel" => "Phpowyswir", "Tomek" => "Issmaster");

include("header.php"); 

try{
    $login = $_POST['login'];
    if($passwords[$_POST['login']] == $_POST['password'])
        {
            session_start();
            echo '<h1>Zalogowano</h1>';
            $_SESSION['counter']=0;
        }
    else
    {
        echo '<h1>Nieprawidlowe Dane</h1>';
    }
}
catch (Exception $e)
{
    echo '<h1>Nieprawidlowe Dane</h1>';
}

?>