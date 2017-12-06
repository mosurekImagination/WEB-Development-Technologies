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
	<div class= "item">box 1</div>
	<div class= "item">box 2</div>
	<div class= "item">box 3</div>
</div>
<div class ="container">
	<div class= "item" id="form1">
	
	<form action="about_the_text.php" method="post">
		<div class = "item input">
		Wpisz tutaj jakieś zdanie:
			<input type="text" name="zdanie" size="100px"/>
			<input type="submit" value="powiedz mi coś o tym tekście!">
		</div>
		<div class = "item input">
		Wpisz tutaj słowo kluczowe:
			<input type="text" name="kluczowe" />
		</div>
	
	</form>
	
	</div>
</div>



</body>

</html>