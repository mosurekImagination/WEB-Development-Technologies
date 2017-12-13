<?php

$logins = array("admin", "Pawel", "Tomek");
$passwords = array(
    "admin" => "123456", "Pawels" => "Phpowyswir", "Tomek" => "Issmaster");

try{
    $login = $_POST['login'];

    if(in_array($login, $logins) &&
        $passwords[$_POST['login']] == $_POST['password'])
        {
            include("header.php"); 
            $_SESSION['counter'] = 1;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['haslo'] = $_POST['password'];
            echo '<h1>Zalogowano</h1>';
            echo  'wyswietlen podstron:'.$_SESSION['counter'];
        }
    else
    {
        include("header.php"); 
        echo '<h1>Nieprawidlowe Dane</h1>';
    }
}
catch (Exception $e)
{
    include("header.php"); 
    echo '<h1>Nieprawidlowe Dane</h1>';
}

?>