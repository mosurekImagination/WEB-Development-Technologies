
<?php session_start(); ?>
<?php
    define("FIVE_DAYS", 60*60*24*5);

    $theme;
    if(isset($_POST['theme']))
        $theme = $_POST['theme']=='ciemny' ?
        'background-color: rgba(76, 98, 255, 0.6);' :
        'background-color: rgba(76, 98, 255, 0.1);';

    $font;
    if(isset($_POST['font'])) 
        $font = 'font-family:'.$_POST['font'].';' ;

    $fontColor;
    if(isset($_POST['fontColor']))
         $fontColor = $_POST['fontColor']=='zielony' ?
             'color:green;' : 'color: black;';
    $list = array(
        "theme" => $theme, "font" => $font, "fontColor" => $fontColor);

    foreach($list as $key => $value)
    {
        if($value != "") setcookie($key, $value, time() + FIVE_DAYS);
    }
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Bardzo fajna strona - Smaczne Ciasteczka</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php include("header.php"); ?>
    <h1>Ciasteczka zapisano ! </h1>
</body>