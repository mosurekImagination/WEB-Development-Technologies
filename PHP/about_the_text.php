<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
    <meta name="description" content="Main Page"/>
    <meta name="keywords" content="main, page"/>
    <meta name="author" content="Pawel Gluszczak"/>
	<title>This is my homepahe of PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div class = "container">
	
</div>
<div class ="container">
	<div class= "item" id="resultForm1">
<?php

$zdanie = $_POST['zdanie'];
$klucz = $_POST['kluczowe'];
$licznik = 0;

if(preg_match("/$klucz/", $zdanie))
{
	echo "Zanazłem w tym zdaniu słowo kluczowe <b> $klucz </b> <br>";
}else
{
	echo "W zdaniu <b>'$zdanie'</b> nie znalazłem słowa:<b> $klucz </b> <br>";
}

if(preg_match("/^$klucz/",$zdanie))// jeżeli klucz jest pierwszym słowem
{
	echo "Słowo <b> $klucz </b> JEST pierwszym słowem we wpisanym zdaniu <br>";
}else
{
	echo "Słowo <b> $klucz </b> NIE jest pierwszym słowem we wpisanym zdaniu <br>";
}

if(preg_match("/$klucz$/",$zdanie))// jeżeli klucz jest ostatnim słowem
{
	echo "Słowo <b> $klucz </b> JEST ostatnim słowem we wpisanym zdaniu <br>";
}else
{
	echo "Słowo <b> $klucz </b> NIE jest ostatnim słowem we wpisanym zdaniu <br>";
}

preg_match("/$klucz/", $zdanie, $match);
preg_replace("/$match/", "KLUCZ" , $zdanie);
echo "Zmienione zdanie: $zdanie";


	
?>
	</div>
</div>



</body>

</html>