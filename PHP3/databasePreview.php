<?php session_start();
 $db = mysqli_connect("localhost","root","", "webdev") 
    or die("Some error occurred during connection " . mysqli_error($db));
    mysqli_set_charset($db,"utf8");
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Bardzo fajna strona - Podgląd bazy danych</title>
</head>
<body>
<?php include("header.php"); ?>
    <div class="databasePreview">
        <h1> Table Users: </h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Hasło</th>
                <th>Nazwisko</th>
                <th>Imie</th>
                <th>Adres</th>
                <th>Miasto</th>
            </tr>
            <?php
            $query = "SELECT * FROM Users";
            mysqli_query($db, $query) or die('Błąd przy pobieraniu danych z Tabeli Users');
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['login']."</td>
                        <td>".$row['password']."</td>
                        <td>".$row['nazwisko']."</td>
                        <td>".$row['imie']."</td>
                        <td>".$row['adres']."</td>
                        <td>".$row['miasto']."</td>
                    </tr>";
            }
            ?>
        </table>
		
            <h1>Table Friendships: </h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>firstFriend</th>
                    <th>secondFriend</th>
                    <th>startDate</th>
                </tr>
            <?php
             $query = "SELECT * FROM Friendships";
            mysqli_query($db, $query) or die('Błąd przy pobieraniu danych z Tabeli Users');
            $result = mysqli_query($db, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['firstFriend']."</td>
                        <td>".$row['secondFriend']."</td>
                        <td>".$row['startDate']."</td>
                        </tr>";
            }
            ?>
        </table>
    </div>
</body>

<?php mysqli_close($db); ?> 