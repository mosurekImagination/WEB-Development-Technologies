<?php session_start();


    $registration_mode = (!isset($_SESSION['login']));
    if(!$registration_mode)
    {
        $db = mysqli_connect("localhost","root","", "webdev") 
        or die("Some error occurred during connection " . mysqli_error($db));
        mysqli_set_charset($db,"utf8");
        $query = "SELECT * FROM Users WHERE login ='".$_SESSION['login']."'";
        mysqli_query($db, $query) or die('Błąd przy pobieraniu danych');
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

        $id =  $row['id'];
        $login = $row['login'];
        $password = $row['password'];
        $nazwisko = $row['nazwisko'];
        $imie = $row['imie'];
        $adres = $row['adres'];
        $miasto = $row['miasto'];
    }

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Bardzo fajna strona - Profil</title>
</head>
<body>

<?php include("header.php"); ?>
    <div class="registration">
        <form action="registerScript.php" method="post">
        <?php 
            if($registration_mode)
            {
            echo' 
                <h1>Login</h1>
                <input type="text" name="login"/>
                <h1>Hasło</h1>
                <input type="password" name="password"/>
                <h1>Imie</h1>
                <input type="text" name="imie"/>
                <h1>Nazwisko</h1>
                <input type="text" name="nazwisko"/>
                <h1>Adres</h1>
                <input type="text" name="adres"/>
                <h1>Miasto</h1>
                <input type="text" name="miasto"/> </br>
                <input type="submit" value="Zarejestruj"/>
                <input type="hidden" name="registerMode" value="on"/>';
            }  
            else{
                echo'
                <h1>Login</h1>
                <input type="text" name="login" value ="'.$login.'"/>
                <h1>Hasło</h1>
                <input type="password" name="password" value ="'.$password.'"/>
                <h1>Imie</h1>
                <input type="text" name="imie" value ="'.$imie.'"/>
                <h1>Nazwisko</h1>
                <input type="text" name="nazwisko" value ="'.$nazwisko.'"/>
                <h1>Adres</h1>
                <input type="text" name="adres" value ="'.$adres.'"/>
                <h1>Miasto</h1>
                <input type="text" name="miasto" value ="'.$miasto.'"> </br>
                <input type="submit" value="Zapisz Dane"/>
                <input type="hidden" name="id" value="'.$id.'"/>';
            }
        ?>
        </form> 

    </div>
</body>

<?php mysqli_close($db); ?> 