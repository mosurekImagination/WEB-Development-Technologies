<link rel="stylesheet" type="text/css" href="style.css"/>
<?php include("applyCookieTheme.php"); 

if(!empty($_SESSION["counter"]))
{
    echo '
    <nav>
		<ul>
		<a href="index.php"><li>Strona główna</li></a> 
			<a href="profile.php"><li>Profil</li></a> 
            <a href="cookies.php"><li>Smaczne Ciasteczka</li></a>
            <a href="databasePreview.php"><li>Baza</li></a>  
            <a href="logout.php"><li>Wyloguj</li></a>   
    </nav>';
	
	
	foreach($_SESSION as $name => $value){
		$data = $name;
		$$data = $value;
		echo '<p>'.$data.' : '.'<span style="font-weight:bold;">'.$$data.'</span></p>';
	}
	$_SESSION['counter']++;
	
}
else
{
    echo '
    <nav>
		<ul>
		<a href="index.php"><li>Strona główna</li></a> 
            <a href="login.php"><li>Logowanie</li></a> 
            <a href="profile.php"><li>Profil</li></a> 
			<a href="cookies.php"><li>Smaczne Ciasteczka</li></a>   
    </nav>';
}
?>