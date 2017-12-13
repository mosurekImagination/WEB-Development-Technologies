<link rel="stylesheet" type="text/css" href="style.css"/>
<?php include("applyCookieTheme.php"); 

if(!empty($_SESSION["counter"]))
{
    echo '
    <nav>
		<ul>
		<a href="index.php"><li>Strona główna</li></a> 
			<a href="cookies.php"><li>Profil</li></a> 
            <a href="cookies.php"><li>Smaczne Ciasteczka</li></a> 
            <a href="login.php"><li>Wyloguj</li></a>   
    </nav>';
    echo ++$_SESSION["counter"];
}
else
{
    echo '
    <nav>
		<ul>
		<a href="index.php"><li>Strona główna</li></a> 
			<a href="login.php"><li>Logowanie</li></a> 
			<a href="cookies.php"><li>Smaczne Ciasteczka2</li></a>   
    </nav>';
    echo ++$_SESSION["counter"];
}
?>