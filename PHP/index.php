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
<h1 style="color:blue; text-align:center;">HERE IS SOME PHP WORK EXAMPLE</h1>
<div class ="container">
	
	<div class="item">
		<a href="about_server.php">
		<input type="submit" value="Wszystkie informacje o serwerze" style="width:100%;" />
		</a>
	</div>
	
	<div class= "item"><h2>Wybierz motyw strony:
		<form action="arytmetyka.php" method="post">
				<select name= "dzialanie" style="width:10%;">
					<option>Jasny</option>
					<option>Ciemny</option>
				</select>
			<input type="submit" value="Zatwierdź"/>
		</form>
	</div>
	<div class= "item">box 3</div>
</div>
<div class ="container">
	<div class= "item" id="form1">
	
	<form action="about_the_text.php" method="post">
		<div class = "item input">
		Wpisz tutaj jakieś zdanie:
			<input type="text" name="zdanie" size="40px"/>
			<input type="submit" value="powiedz mi coś o tym tekście!">
		</div>
		<div class = "item input">
		Wpisz tutaj słowo kluczowe:
			<input type="text" name="kluczowe" />
		</div>
	</form>
</div>

<div class ="container">
	<div class="item" style="margin:auto;">
	<form action="arytmetyka.php" method="post">
		<input type="text" name="liczba1" style="width:40%";/> 
			<select name= "dzialanie" style="width:10%;">
				<option>+</option>
				<option>-</option>
				<option>/</option>
				<option>*</option>
				<option>!=</option>
				<option>==</option>
				<option>&lt </option>
				<option>&gt </option>
				<option>&lt=</option>
				<option>&gt=</option>
				<option>mod</option>
			</select>
		<input type="text" name="liczba2" style="width:40%";/>
		<input type="submit" value="policz"/>
	</form>
	</div>
</div>


<div class="container">
	<div class="item" style="text-align:center;">
		<h1>Wypełnij formularz</h1>
		
		<form action="formularz.php" method="post">
		Imie: <input type="text" name="imie"/> <br>
		Drugie imie: <input type="text" name="drugie"/> <br>
		Nazwisko: <input type="text" name="nazwisko"/> <br>
		Wydział: <input type="text" name="wydzial"/> <br>
		Kierunek: <input type="text" name="kierunek"/> <br>
		<input type="submit" value="Wyślij!"/>
		
		</form>
	</div>
</div>

<div class="container">
	<div class ="item">
		<form action="typeoperations.php" method="post">
			<div class = "item input">
			Podaj promień koła:
				<input type="text" name="promien" size="50px"/>
				<input type="submit" value="Oblicz różne rzeczy">
			</div>

		</form>
	</div>
</div>

</div>



</body>

</html>