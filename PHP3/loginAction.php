

<?php
session_start();
// $logins = array("admin", "Pawel", "Tomek");
// $passwords = array(
//     "admin" => "123456", "Pawels" => "Phpowyswir", "Tomek" => "Issmaster");

try{
    $db = mysqli_connect("localhost","root","", "webdev");
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_set_charset($db,"utf8");
    $query = "SELECT login FROM Users WHERE login ='".$_POST['login']."' AND password ='".$_POST['password']."'";
    mysqli_query($db, $query) or die('Błąd przy pobieraniu danych');
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    if($row['login']!= null)
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

<?php mysqli_close($db); ?> 