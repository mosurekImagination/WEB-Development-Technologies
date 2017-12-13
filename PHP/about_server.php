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
<div>
	<div class="item">
		Some secret datas: <br>
		
		<?php
		$id = 1;
		foreach($_SERVER as $value)
		{
			echo "Server data $id: $value";
			echo "<br>";
			$id++;
		}
		?>
	</div>
	<div class="item" id="documentation">
		
		<?php
		echo ' <a href="http://php.net/manual/en/reserved.variables.server.php" target="_blank"> link to documentation </a>';
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