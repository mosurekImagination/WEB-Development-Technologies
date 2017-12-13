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
<div class ="container">
	<div class= "item" id="resultForm1">
<?php

$zdanie = $_POST['zdanie'];
$klucz = $_POST['kluczowe'];
$licznik = "0";

echo "Zdanie które napisałeś to: <b>' $zdanie '</b> a tu pare informacji o nim: :) <br>";


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

while(preg_match("/\b([[:alpha:]]+)\b/", $zdanie, $match))
{
	$licznik = $licznik + "1";
	$zdanie = preg_replace("/" . $match[ 1 ] . "/" , "", $zdanie);
}
echo "Zdanie ma: <b> $licznik </b> różnych słów <br>";



	
?>
	</div>
</div>

<div class="container">
	<div class ="item">
		<a href="index.php">
		<input type="button" value="Wroc na strone główną" style="width:100%;"/>
		</a>
	</div>
</div>

</body>

</html>