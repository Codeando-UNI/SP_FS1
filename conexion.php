<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "123";
$dbname = "sp_fs1";
$conecta = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
        or die(mysql_error("No se pudo  conectar a la base de datos"));
