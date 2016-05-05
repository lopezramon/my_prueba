<?php
	//Conexion a la db de postgres
	$dbcon="host=localhost user=postgres password='ubv123$'dbname=estacionamiento port=5432";
	$conexion = pg_connect($dbcon) or die("Error en la Conexión: ".pg_last_error());
	echo "<h3>Conexion Exitosa a Estacionamiento con PHP - PostgreSQL</h3><hr><br>";
	//Query de prueba
	$query='select id,username,cedula from usuarios order by id';
	$result= pg_query($query) or die('La consulta fallo: '.pg_last_error());
	//Imprimindo resultados html
	//Primera Prueba
		echo "<table>\n";
		while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
		echo "\t<tr>\n";
    		foreach ($line as $col_value) {
     	  	echo "\t\t<td>$col_value</td>\n";
    		}
    		echo "\t</tr>\n";
		}
		echo "</table>\n";

	//Segunda Prueba
	//	while($line=pg_fetch_array($result)){
	//	var_dump($line);
	//	}
	
	//tercera prueba
	//while($rs=pg_fetch_array($result)){
	//echo "<br>".$rs[1];
	//}

	pg_free_result($result);
	pg_close($conexion);
?>
