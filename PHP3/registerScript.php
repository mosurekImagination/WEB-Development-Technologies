<?php session_start();

    $registerMode = isset($_POST['registerMode']);

        $db = mysqli_connect("localhost","root","", "webdev") 
        or die("Some error occurred during connection " . mysqli_error($db));
        mysqli_set_charset($db,"utf8");


        $login = $_POST['login'];
        $password = $_POST['password'];
        $nazwisko = $_POST['nazwisko'];
        $imie = $_POST['imie'];
        $adres = $_POST['adres'];
        $miasto = $_POST['miasto'];

        $correctInput = true;
        $errorMsg;
        $query;
        if($correctInput) {
            if(preg_match('/^([a-z|A-Z|0-9]{5,20})$/', $login) == FALSE)
             {
                $correctInput = false; 
                $errorMsg = "Nieprawidlowy login";
             }
        }

    if($correctInput)
    {
        if($registerMode)
        {
            $query = "INSERT INTO Users  (login, password, nazwisko, imie, adres, miasto)
                    VALUES('$login', '$password', '$nazwisko', '$imie', '$adres', '$miasto');";
        }
        else
        {
            $query = "UPDATE Users SET login = '$login', password = '$password', nazwisko = '$nazwisko',
                imie = '$imie', adres = '$adres', miasto = '$miasto' WHERE id =".$_POST["id"].';';
			$_SESSION['login'] = $login;
			$_SESSION['haslo'] = $password;
        }
       // print($query);
        mysqli_query($db, $query) or die('Błąd przy zapisywaniu danych');
    }



?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Bardzo fajna strona - Rezultat</title>
</head>
<body>

<?php 
    include("header.php"); 
    if($correctInput)
    {
        if($registerMode) echo '<h1>Zarejestrowano poprawnie</h1>';
        else { echo "<h1> Modyfikacja danych przeprowadzona poprawnie</h1>";}
    }
    else
    {
        echo $errorMsg;
    }
?>
</body>
</html>