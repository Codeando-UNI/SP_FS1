
 
 <?php

include 'conexion.php';
$id="2";
$query = "select * from medicion where id_potenciometro=".$id." order by id desc limit 0,1";
$sad = mysqli_query($conecta, $query);
$data = array();
$mostrar =mysqli_fetch_array($sad);

print_r($mostrar);

//while ( $mostrar =mysqli_fetch_array($sad)) {
//    $tmp = array("datos" => [
//            "medicion" => $mostrar["value"],
//                "fecha" => $mostrar["date"]
//            ]);
//    array_push($data, $tmp);
//    
//}
//echo json_encode($data);