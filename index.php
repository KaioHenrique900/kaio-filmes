<?php
	include 'header.php';
	include 'get_filmes.php';
?>
	<head>

		<title>Nezzo Filmes</title>

	</head>

	<body>

		<div id="myModal-info" class="modal-info">

		  <!-- Modal content -->
		  <div id="modalInfoContent" class="modal-info-content">
		    <span class="close-info">&times;</span>
			  <p id="modalInfoP"><i class="fa fa-info-circle"></i> Todos os anúncios presentes neste site são de programas de afiliados que o desenvolvedor faz parte.</p>
		  </div>

		</div>

		<div class="topnav" id="myTopnav">
		  	<a href="index.php" class="active">Home</a>
		  	
		  	<div class="dropdown">
		  		<button class="dropbtn">Gêneros <i class='fa fa-angle-down'></i></button>
		  		<div class="dropdown-content">
		  			<?php
		  				$cats = getCategorias();
		  				foreach($cats as &$cat){
							$titulo = $cat['tituloCat'];

							echo "<a href='#'>".$titulo."</a>";
							
						}
		  			?>
			  		<!--<a href="#">Ação</a>
	    			<a href="#">Animação</a>
	    			<a href="#">Comédia</a>
	    			<a href="#">Drama</a>
	    			<a href="#">Fantasia e Ficção Científica</a>
	    			<a href="#">Romance</a>
	    			<a href="#">Suspense e Terror</a>-->
			  	</div>
			</div>

		  	<div class="dropdown">
		  		<button class="dropbtn">Destaques <i class='fa fa-angle-down'></i></button>
		  		<div class="dropdown-destaques-content">
			  		<div class="destaques-item"><img src="images/tetlamt-horizontal.jpg" class="destaques-img"><div class="destaques-title">Melhores Filmes de 2022</div></div>
			  		<div class="destaques-item"><img src="images/red-horizontal.jpg" class="destaques-img"><div class="destaques-title">Animações da Disney e Pixar</div></div>
	    			<div class="destaques-item"><img src="images/shrek-horizontal.jpg" class="destaques-img"><span class="destaques-title">Animações da DreamWorks</span></div>
			  	</div>
			</div>

		  	<div class="dropdown">
			  <button href="#patrocinadores" class="dropbtn">Patrocinadores <i class='fa fa-angle-down'></i></button>
			  <div class="dropdown-content">
			  	<a href="associados-amazon.php">Associados Amazon</a>
	    		<a href="https://www.magazinevoce.com.br/magazinekaiosilvanezio/" target="_blank">Meu Parceiro Magalu</a>
			  </div>
			</div>

		  <a href="javascript:void(0);" class="icon" onclick="responsiveTopNav()">
		    <i id="topnavControl" class="fa fa-bars"></i>
		  </a>
		</div>

		<div class="slideshow-container">

		<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!A8LDGqkCX6Ie" target="_blank"><div class="mySlides fade">
		  <img class="slide-img" src="images/drive-horizontal.jpg">
		  <div class="movieTitle">Drive</div>
		  <div class="movieSubtitle">2011</div>
		</div></a>

		<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne" target="_blank"><div class="mySlides fade">
		  <img class="slide-img" src="images/o-grande-lebowski-horizontal.jpg">
		  <div class="movieTitle">O Grande Lebowski</div>
		  <div class="movieSubtitle">1998</div>
		</div></a>

		<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW" target="_blank"><div class="mySlides fade">
		  <img class="slide-img" src="images/django-livre-horizontal.jpg">
		  <div class="movieTitle">Django Livre</div>
		  <div class="movieSubtitle">2012</div>
		</div></a>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
			let slideIndex = 0;
			showSlides();

			function showSlides() {
			  let i;
			  let slides = document.getElementsByClassName("mySlides");
			  let dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
			    slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
			    dots[i].className = dots[i].className.replace(" dotActive", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " dotActive";
			  setTimeout(showSlides, 5000); // Change image every 2 seconds
			}
		</script>
		
		<div class="content-main">
			<center>
				<div class="ad1" >
					<a href="https://amzn.to/3q6hspa" target="_blank"><img src="https://m.media-amazon.com/images/I/714Rq4k05UL._AC_SY355_.jpg" ></a>
					<a href="https://amzn.to/3q6hspa" class="title-product" target="_blank">Echo Dot (4ª Geração): Smart Speaker com Alexa | Música, informação e Casa Inteligente - Cor Preta</a>
				</div>

				<div class="ad1" >
					<a href="https://amzn.to/3cPjRBE" target="_blank"><img src="https://m.media-amazon.com/images/I/71-k35bQj4L._AC_SL1500_.jpg" ></a>
					<a href="https://amzn.to/3cPjRBE" class="title-product" target="_blank">PlayStation®5 + Horizon Forbidden West</a>
				</div>
			</center>

			<h1>Melhores Filmes</h1>

			
			
			<div id="melhoresCat" class="row">
				<?php 
					$filmes = getFilmes(14);
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$capaH = $filme['capaHFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						$duracao = $filme['duracaoFilme'];
						$sinopse = $filme['sinopseFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more' onclick='showModal(\"".$link."\", \"".$titulo."\", \"".$nota."\", \"".$ano."\", \"".$duracao."\", \"images/".$capaH."\", \"direcao\", \"".$sinopse."\")'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

			</div> 

			<h1>Animações</h1>

			<div class="row row-responsive">

				<?php 
					$filmes = getFilmes(2);
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$capaH = $filme['capaHFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						$duracao = $filme['duracaoFilme'];
						$sinopse = $filme['sinopseFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more' onclick='showModal(\"".$link."\", \"".$titulo."\", \"".$nota."\", \"".$ano."\", \"".$duracao."\", \"images/".$capaH."\", \"direcao\", \"".$sinopse."\")'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

			</div>


			<h1>Comédias</h1>

			<div class="row row-responsive">

				<?php 
					$filmes = getFilmes(4);
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$capaH = $filme['capaHFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						$duracao = $filme['duracaoFilme'];
						$sinopse = $filme['sinopseFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more' onclick='showModal(\"".$link."\", \"".$titulo."\", \"".$nota."\", \"".$ano."\", \"".$duracao."\", \"images/".$capaH."\", \"direcao\", \"".$sinopse."\")'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

			</div>

			<h1>Dramas</h1>

			<div class="row row-responsive">

				<?php 
					$filmes = getFilmes(5);
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$capaH = $filme['capaHFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						$duracao = $filme['duracaoFilme'];
						$sinopse = $filme['sinopseFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more' onclick='showModal(\"".$link."\", \"".$titulo."\", \"".$nota."\", \"".$ano."\", \"".$duracao."\", \"images/".$capaH."\", \"direcao\", \"".$sinopse."\")'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

			</div>

			<center>
				<div class="ad1">
					<a href="https://amzn.to/3cFN0it" target="_blank"><img src="https://m.media-amazon.com/images/I/51degAt5CFL._AC_SX569_.jpg" ></a>
					<a href="https://amzn.to/3cFN0it" class="title-product" target="_blank">Fire TV Stick | Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)</a>
				</div>

				<div class="ad1">
					<a href="https://amzn.to/3QapnMI" target="_blank"><img src="https://images-na.ssl-images-amazon.com/images/I/51kYAhF49CL._SX352_BO1,204,203,200_.jpg" ></a>
					<a href="https://amzn.to/3QapnMI" class="title-product" target="_blank">Drácula - Dark Edition: Edição limitada para caçadores de vampiros Capa dura</a>
				</div>
			</center>

		</div>

		<div class="footer">Desenvolvido por <a href="https://www.instagram.com/kaionezio/" target="_blank">Kaio Nezio <i class="fa fa-external-link-square"></i></a></div>

		<!-- The Modal -->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div id="modalcontent" class="modal-content">
		    <span class="close">&times;</span>
		    <span class="modal-nota"><span class="fa fa-star"></span> <span id="notaFilme"></span></span>
		    <a id="linkFilme" href="" target="_blank"><img id="imageFilme" class="modal-img" src=""></a>
		    <div class="modal-body">
		      <center><h2 id="nomeFilme" class="modal-titulo"></h2></center>  <!-- Modificar o center -->
		      <span id="anoFilme" class="modal-ano"></span>
			  <span id="duracaoFilme" class="modal-duracao"></span>
			  <p id="direcaoFilme"></p>
			  <p id="sinopseFilme" class="modal-sinopse"></p>
		    </div>
		  </div>

		</div>

		<script>
		// Get the modal
		var modal = document.getElementById("myModal");
		var modal2 = document.getElementById("myModal-info");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		var span2 = document.getElementsByClassName("close-info")[0];

		var linkFilme; var nomeFilme; var notaFilme; var anoFilme; var duracaoFilme; var imageFilme;
		function showModal(linkFilme, nomeFilme, notaFilme, anoFilme, duracaoFilme, imageFilme, direcaoFilme, sinopseFilme){
			//Imagem:
			document.getElementById('imageFilme').src = imageFilme;
			//Link:
			document.getElementById('linkFilme').href = linkFilme;
			//Nota:
			document.getElementById('notaFilme').innerHTML = notaFilme+"/10";
			//Titulo:
			document.getElementById('nomeFilme').innerHTML = nomeFilme;
			//Ano:
			document.getElementById('anoFilme').innerHTML = "<b>Ano:</b> " + anoFilme;
			//Duracao:
			document.getElementById('duracaoFilme').innerHTML = "<b>Duração:</b> " + duracaoFilme;
			//Direcao:
			document.getElementById('direcaoFilme').innerHTML = "<b>Direção:</b> " + direcaoFilme;
			//Sinopse:
			document.getElementById('sinopseFilme').innerHTML = "<b>Sinopse:</b> " + sinopseFilme;
			modal.style = "display: -webkit-box; display: -moz-box; display: -ms-flexbox; display: -webkit-flex; display: flex;";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}

		span2.onclick = function() {
		  modal2.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		    modal2.style.display = "none"
		  }
		}
		</script>
    
	</body>

</html>