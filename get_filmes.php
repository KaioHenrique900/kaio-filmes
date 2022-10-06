<?php

include 'bd_connect.php';

$EE = $conn;
function getMelhores(){
	$query = pg_query($EE, 'SELECT * FROM filmes as f inner join filmes_categorias as fc on f."idFilme" = fc."fk_idFilme" and fc."fk_idCat" = 14');
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
}


pg_close($conn);
?>