<?phpfunction generarCadenaAleatoria(){	srand (time());	$cad = "";	$abcedario = array( 'a', 'b', 'c', 'd', 'e','f', 'g', 'h', 'i', 'j',	                    'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',					    't', 'u', 'v', 'w', 'x', 'y', 'z');					  	$tamanoCadena = rand(1,30);		for($i=0;$i<$tamanoCadena;$i++)	    $cad.= $abcedario[rand(0,25)];	return $cad;	}