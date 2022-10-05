<?php

include 'bd_connect.php';

$query = pg_query($conn, "SELECT * FROM filmes");
$filmes = Array();

if(pg_num_rows($query) > 0){
	while ($row = pg_fetch_array($query)) {
		$filme = Array();
		$row = pg_fetch_array($query);

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
print_r($filmes);

pg_close($conn);
?>