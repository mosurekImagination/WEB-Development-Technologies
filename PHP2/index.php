<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
    <meta name="description" content="Main Page"/>
    <meta name="keywords" content="mains, page"/>
    <meta name="author" content="Tomek"/>
	<title>Bardzo fajna strona</title>

</head>
<body>
<?php include("header.php"); ?>

<aside>
	<h2> Wybierz motyw strony </h2>
		<form action="setTheme.php" method="post"> 
			<select name="theme">
				<option>jasny</option>
				<option>ciemny</option>
			</select>
	<h2> Wybierz czcionkę: </h2>
			<select name="font">
				<option>Times New Roman</option>
				<option>fantasy</option>
			</select>
	<h2> Wybierz kolor czcionki: </h2>
			<select name="fontColor">
				<option>czarny</option>
				<option>zielony</option>
			</select></br>
			<input type="submit" value="Zmień"/>
		</form>
	</aside>

	<div class="content">
		<h1>Politechnika Wrocławska</h1>
		<p>
			Politechnika Wrocławska – państwowa szkoła wyższa we Wrocławiu, uważana za jedną z najlepszych uczelni technicznych w Polsce.
			Według Webometrycznego Rankingu Uniwersytetów Świata ze stycznia 2016, pokazującego zaangażowanie
			instytucji akademickich w istnieniu w sieci Web, uczelnia zajmuje 6. miejsce w Polsce wśród uczelni technicznych, a na świecie 577. pośród wszystkich typów uczelni.
			Początki uczelni można szukać w 1910 r., kiedy powstała Królewska Wyższa Szkoła Techniczna we Wrocławiu (Königliche Technische Hochschule Breslau), później, w roku 1918 zmieniono nazwę na Wyższa Szkoła Techniczna (Technische Hochschule). W uroczystościach otwarcia uczestniczył cesarz Wilhelm II. Studia rozpoczęło wtedy 57 studentów, a z biegiem lat liczba ta rosła. W 1913 wynosiła już 238 osób, a szczyt liczby studiujących – 926 osób – osiągnięto w 1927.
		</p>
	 <h2> Historia </h2>
	 <p>
		Lata 30. XX wieku przyniosły kryzys, który dotknął także uczelnie. Wprowadzono kuratora, także wspólny budżet i administrację z uniwersytetem. Spadała liczba studiujących, w 1937 roku były to 482 osoby. W 1939 roku wybuchła II wojna światowa. Do roku 1943 uczelnia funkcjonowała bez większych zakłóceń. W czwartym roku wojny front wschodni zaczął się jednak przybliżać do granic Rzeszy. W połowie stycznia 1945 roku po ogłoszeniu miasta twierdzą (Festung Breslau) podjęto decyzję o ewakuacji Technische Hochschule w głąb Rzeszy. Tym samym szkoła zakończyła swoje funkcjonowanie.

		W budynkach Technische Hochschule, z wykorzystaniem jej sprzętu i bibliotek, utworzono w 1945 polską Politechnikę Wrocławską. Znaczną rolę w zagospodarowaniu budynków i organizacji szkoły odegrali pracownicy naukowi uczelni lwowskich. Uczeni i absolwenci Politechniki Lwowskiej praktycznie zbudowali ją od postaw. Szczególną role w tym procesie odegrali rektor Politechniki Lwowskiej – profesor Edward Sucharda, a także profesor Kazimierz Idaszewski. Duży wkład wniósł również inż. Dionizy Smoleński, przed wojną asystent w Politechnice Warszawskiej.

		Pierwszy polski wykład w Politechnice Wrocławskiej, wygłoszony przez profesora Kazimierza Idaszewskiego, odbył się 15 listopada 1945 roku. Dzień ten obchodzony jest jako święto Uczelni, a także święto nauki wrocławskiej. Przez pewien okres Politechnika była administracyjnie połączona z Uniwersytetem Wrocławskim[7].

		W 1945 roku istniało 5 wydziałów: Chemii Technicznej, Mechaniczno-Elektrotechniczny, Budownictwa, Hutniczo-Górniczy oraz Matematyczno-Przyrodniczy (wspólny z Uniwersytetem). Studia podjęło wówczas 595 osób[7].

		14/15 grudnia 1981, w czasie stanu wojennego oddziały ZOMO siłą stłumiły strajk na uczelni. Podczas akcji milicji pracownik politechniki, Tadeusz Kosecki, dostał ataku serca, w wyniku którego zmarł[8].

		W ciągu całego 2010 roku w ramach obchodów stulecia uczelni technicznych we Wrocławiu odbyły się różnego rodzaju imprezy kulturalne i naukowe. Zwieńczeniem uroczystości był I Światowy Zjazd Absolwentów, który odbył się listopadzie tegoż roku.
		</p>
	</div>
	<footer>Copyright C by T and P </footer>
</body>

</html>