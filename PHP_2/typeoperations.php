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

        define("PI", 3.14);
        $data=Date("l");
        function obliczPole($r)
        {
            return     PI*$r*$r;
        }

        $promien = $_POST['promien'];
        if($promien > 3)
        {
        setType($promien, "double");
        $pole=obliczpole($promien);
        echo "<h1> Obliczanie rzeczy o okręgu dnia:<span>".$GLOBALS['data']."</span></h1>
            <h2>Wpisana przez Ciebie wartość była typu: <span>".getType($_POST['promien'])."</span>. W celu wykonania obliczeń została zamieniona na <span>".getType($promien)."</span>
            <h2>Promień okręgu: <span>$promien</span></h2>
            <h2>Liczba PI (const):<span>".PI."</span>
        <h3>Pole okręgu wynosi: <span>".$pole."</span></h2>
            Co po rzutowaniu na liczbę całkowitą daje wynik:<span>".(int)$pole."</span> Jednak to tylko rzutowanie - więc jego wartość jest niezmieniona - <span>pole: ".$pole."</span>";
        }
        else
        {
            echo "<h1>Takiego małego okręgu nikt nie chce - <span>rozmiar ma znaczenie!</span></h1>";
        }
        
        echo "<div class=spy>
            Razem z informacją o promieniu przechwyciliśmy dane o Twoim komputerze, zawuważając, że masz wiele <span> nielegalnych plików.</span> Dane wysłaliśmy do FBI i NSA w ramach walki z Cyberprzestępczością.
            
            <h3>Informacje o Twojej przeglądarce:</h3>".$_SERVER['HTTP_USER_AGENT']."
            <h3>Twoje IP:</h3>".$_SERVER['REMOTE_ADDR']."
            .
            <h3>Serdecznie Pozdrawiamy i zapraszamy do ponownego skorzystania z naszych usług!</h3>
            </div>"

?>
	</div>
</div>



</body>

</html>