<?php

//include 'bd_connect.php';

function getMelhores(){
	$host="ec2-3-219-229-143.compute-1.amazonaws.com";
	$port="5432";
	$user="lffjupovuwkowk";
	$database="d9ubq55up557s";
	$password="9d5ed4768450704643a229dc1dc5329bd6a7b339eedffd464875a9398b678666";

	$conn = pg_connect("host = ec2-3-219-229-143.compute-1.amazonaws.com port = 5432 dbname = d9ubq55up557s user = lffjupovuwkowk password = 9d5ed4768450704643a229dc1dc5329bd6a7b339eedffd464875a9398b678666 sslmode=require") or
	die ("Não foi possível conectar ao servidor PostGreSQL");

	$query = pg_query($conn, 'SELECT * FROM filmes as f inner join filmes_categorias as fc on f."idFilme" = fc."fk_idFilme" and fc."fk_idCat" = 14');
	$filmes = Array();

	if(pg_num_rows($query) > 0){
		while ($row = pg_fetch_array($query)) {
			$filme = Array();

			$idFilme=$row["idFilme"];
			$filme['idFilme']=$idFilme;

			$tituloFilme=$row['tituloFilme'];
			$filme['tituloFilme']=$tituloFilme;

			$anoFilme=$row['anoFilme'];
			$filme['anoFilme']=$anoFilme;

			$notaFilme=$row['notaFilme'];
			$filme['notaFilme']=$notaFilme;

			$capaFilme=$row['capaFilme'];
			$filme['capaFilme']=$capaFilme;

			$duracaoFilme=$row['duracaoFilme'];
			$filme['duracaoFilme']=$duracaoFilme;

			$linkFilme=$row['linkFilme'];
			$filme['linkFilme']=$linkFilme;

			$filmes[]=$filme;
		}
	}
	return $filmes;
	pg_close($conn);
}

?>