<?php include("header.php"); ?>
<h1>Tablica smacznych ciasteczek:<h1>
<?php
    foreach($_COOKIE as $key => $value)
    {
        print("<p>$key: $value</p>");
    }

?>