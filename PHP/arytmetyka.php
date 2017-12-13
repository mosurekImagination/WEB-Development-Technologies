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
	<div class = "item" id="resultForm2"> 
		<?php
		
		$dzialanie = $_POST['dzialanie'];
		$liczby = array($_POST['liczba1'],$_POST['liczba2']);
		$wynik;
		
		if(!preg_match("/\b([[:digit:]]+)\b/",$_POST['liczba1'])
			|| 
		   !preg_match("/\b([[:digit:]]+)\b/",$_POST['liczba2']))
		{
			echo "Możesz wpisać do działan tylko liczby, wroc i sprobuj jeszcze raz";
			die();
		}
	
	
		if(strcmp($dzialanie, "+")==0)
		{
			$wynik = $liczby[0]+$liczby[1];
		}
		elseif(strcmp($dzialanie, "-")==0)
		{
			$wynik = $liczby[0]-$liczby[1];
		}
		elseif(strcmp($dzialanie, "/")==0)
		{
			$wynik = $liczby[0]/$liczby[1];
		}
		elseif(strcmp($dzialanie, "*")==0)
		{
			$wynik = $liczby[0]*$liczby[1];
		}
		elseif(strcmp($dzialanie, "!=")==0)
		{
			$wynik = $liczby[0] != $liczby[1];
		}
		elseif(strcmp($dzialanie, "==")==0)
		{
			$wynik = $liczby[0] == $liczby[1];
		}
		elseif(strcmp($dzialanie, "<")==0)
		{
			if($liczby[0] < $liczby[1]) $wynik = "tak";
			else $wynik = "nie";
		}
		elseif(strcmp($dzialanie, ">")==0)
		{
			if($liczby[0] > $liczby[1]) $wynik = "tak";
			else $wynik = "nie";
		}
		elseif(strcmp($dzialanie, "<=")==0)
		{
			if($liczby[0] <= $liczby[1]) $wynik = "tak";
			else $wynik = "nie";
		}
		elseif(strcmp($dzialanie, ">=")==0)
		{
			if($liczby[0] >= $liczby[1]) $wynik = "tak";
			else $wynik = "nie";
		}
		elseif(strcmp($dzialanie, "mod")==0)
		{
			$wynik= $liczby[0] % $liczby[1];
		}
		
		echo "$liczby[0] $dzialanie $liczby[1] = $wynik";
		
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