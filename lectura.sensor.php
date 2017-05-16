<?php

require ("conexion.php");
$id1 = htmlspecialchars($_GET["id1"], ENT_QUOTES);
$v1 = htmlspecialchars($_GET["v1"], ENT_QUOTES);
$id2 = htmlspecialchars($_GET["id2"], ENT_QUOTES);
$v2 = htmlspecialchars($_GET["v2"], ENT_QUOTES);

// Valida que esten presente todos los parametros

    $sql1 = "INSERT INTO medicion (id, id_potenciometro, date, value) VALUES (id,'$id1',NOW(),'$v1')";
    $sql2 = "INSERT INTO medicion (id, id_potenciometro, date, value) VALUES (id,'$id2',NOW(),'$v2')";
    mysql_query($sql1);
    mysql_query($sql2);
    echo "Datos guardados exitosamente";



