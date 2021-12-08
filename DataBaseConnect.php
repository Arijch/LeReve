<?php
$link = mysql_connect("localhost", "mysql_user", "mysql_password")
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_close($link);
?>