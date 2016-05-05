<?php
$fp = fopen ( "inscripcion.csv" , "r" );
while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) { // Mientras hay líneas que leer...

    $i = 0;
    foreach($data as $row) {

         echo htmlentities ("Campo $i: $row"); // Muestra todos los campos de la fila actual
	echo "<br>";        
$i++ ;

    }

    echo "<br><br>";

}
fclose ( $fp );
?> 
