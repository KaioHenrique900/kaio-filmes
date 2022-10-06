<?php

include 'bd_connect.php';

$query = pg_query($conn, 'SELECT * FROM filmes inner join filmes_categorias on filmes_categorias.fk_idCat = 14');
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

pg_close($conn);
?>