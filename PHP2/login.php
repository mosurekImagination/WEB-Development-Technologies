<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Bardzo fajna strona - Smaczne Ciasteczka</title>
</head>
<body>
<?php include("header.php"); ?>
    <div class="login">
    <form action="loginAction.php"  method="post">
    <h2>Login</h2>
    <input type="text" name="login"/>
    <h2>Hasło</h2>
    <input type="text" name="password"/>
    <input type="submit" value="Zaloguj"/>
    </form>
    </div>
</body>