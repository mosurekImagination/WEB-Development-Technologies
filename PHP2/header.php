<link rel="stylesheet" type="text/css" href="style.css"/>
<?php include("applyCookieTheme.php"); 

session_start();
if(!empty($_SESSION["counter"]))
{
    echo '
    <nav>
		<ul>
		<a href="index.php"><li>Strona główna</li></a> 
			<a href="cookies.php"><li>Profil</li></a> 
            <a href="cookies.php"><li>Smaczne Ciasteczka</li></a> 
            <a href="logout.php"><li>Wyloguj</li></a>   
    </nav>';
    echo "Wyswietlen podstron:".++$_SESSION['counter'].
    " <p>Login:".$_SESSION['login'].
    "</p><p>Haslo:".$_SESSION['haslo']."</p>";
}
else
{
    echo '
    <nav>
		<ul>
		<a href="index.php"><li>Strona główna</li></a> 
			<a href="login.php"><li>Logowanie</li></a> 
			<a href="cookies.php"><li>Smaczne Ciasteczka</li></a>   
    </nav>';
}
?>