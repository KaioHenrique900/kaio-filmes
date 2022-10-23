<?php

function getCategorias(){
	$host="ec2-3-219-229-143.compute-1.amazonaws.com";
	$port="5432";
	$user="lffjupovuwkowk";
	$database="d9ubq55up557s";
	$password="9d5ed4768450704643a229dc1dc5329bd6a7b339eedffd464875a9398b678666";

	$conn = pg_connect("host = ec2-3-219-229-143.compute-1.amazonaws.com port = 5432 dbname = d9ubq55up557s user = lffjupovuwkowk password = 9d5ed4768450704643a229dc1dc5329bd6a7b339eedffd464875a9398b678666 sslmode=require") or
	die ("Não foi possível conectar ao servidor PostGreSQL");

	$query = pg_query($conn, 'SELECT * FROM categorias');
	$cats = Array();

	if(pg_num_rows($query) > 0){
		while ($row = pg_fetch_array($query)) {
			$cat = Array();

			$idCat=$row["idCat"];
			$cat['idCat']=$idCat;

			$tituloCat=$row['tituloCat'];
			$cat['tituloCat']=$tituloCat;

			$cats[]=$cat;
		}
	}
	return $cats;
	pg_close($conn);
}

?>