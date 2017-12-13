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
<div class="container">
	<div class="item" id="resultForm3">
	
	<?php
	$array;
	
	for(reset($_POST); $element= key($_POST); next($_POST))
	{
		$array[] = $_POST[$element];
	}
	
	$newArray["imie"] = $array[0];
	$newArray["drugieImie"] =$array[1];
	$newArray["nazwisko"] =$array[1];
	$newArray["wydzial"] =$array[1];
	$newArray["kierunek"] =$array[1];
	
	echo "Imie: " . $newArray["imie"] . "<br>";
	echo "Drugie Imie: " .$newArray["drugieImie"] . "<br>";
	echo "Nazwisko: " . $newArray["nazwisko"] . "<br>";
	echo "Wydzial: " . $newArray["wydzial"] . "<br>";
	echo "Kierunek: " . $newArray["kierunek"] . "<br>";
	
	?>
	
	
	</div>
</div>

<div class="container"> 
	<div class ="item">
		<h3>PHP Code to expose: </h3>  <!-- tutaj kawalek kodu, do pokazania co na tej stronie sie dzieje -->
		<p>
			$array; <br>
			<br>
			for(reset($_POST); $element= key($_POST); next($_POST))  <br>
			{ <br>
				$array[] = $_POST[$element]; <br>
			} <br>
			 <br>
			$newArray["imie"] = $array[0]; <br>
			$newArray["drugieImie"] =$array[1]; <br>
			$newArray["nazwisko"] =$array[1]; <br>
			$newArray["wydzial"] =$array[1]; <br>
			$newArray["kierunek"] =$array[1]; <br>
			
			echo "Imie: " . $newArray["imie"]; <br>
			echo "Drugie Imie: " .$newArray["drugieImie"]; <br>
			echo "Nazwisko: " . $newArray["nazwisko"]; <br>
			echo "Wydzial: " . $newArray["wydzial"]; <br>
			echo "Kierunek: " . $newArray["kierunek"] ; <br>
		</p>
		
		
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