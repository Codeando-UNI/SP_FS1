<?php

if( !empty($_GET)) {
	if (isset($_GET["id1"])){
		$id1  = htmlspecialchars($_GET["id1"],ENT_QUOTES);
		echo "id1 ha sido enviado exitosamente, su valor es: ".$id1."\n";
	}
	if (isset($_GET["id2"])){
		$id1  = htmlspecialchars($_GET["id2"],ENT_QUOTES);
		echo "id2 ha sido enviado exitosamente, su valor es: ".$id2."\n";
	}
	if (isset($_GET["v1"])){
		$id1  = htmlspecialchars($_GET["v1"],ENT_QUOTES);
		echo "v1 ha sido enviado exitosamente, su valor es: ".$v1."\n";
	}
	if (isset($_GET["v2"])){
		$id1  = htmlspecialchars($_GET["v2"],ENT_QUOTES);
		echo "v2 ha sido enviado exitosamente, su valor es: ".$v2."\n";
	}

} else{
	echo "No se ha recibido ningun valor";
}

?>