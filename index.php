<?php
	include 'header.php';
?>
	<head>

		<title>Kaio Movies</title>

	</head>

	<body>

		<div class="topnav" id="myTopnav">
		  <a href="#home" class="active">Home</a>
		  <a href="#news">Gêneros</a>
		  <a href="#contact">Contact</a>
		  <a href="#about">About</a>
		  <a href="javascript:void(0);" class="icon" onclick="responsiveTopNav()">
		    <i class="fa fa-bars"></i>
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

			<h1>Melhores Filmes</h1>

			<div class="row">
				<div class="content">
					<div class="filme-content">
						<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL" target="_blank"><img class="filme-image" src="images/2001-uma-odisseia-no-espaco.jpg"></a>
						<div class="filme-nome">2001: Uma Odisséia No Espaço</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">1969</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE" target="_blank"><img class="filme-image" src="images/cidade-de-deus.jpg"></a>
						<div class="filme-nome">Cidade de Deus</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2002</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUEDErUQVruA" target="_blank"><img class="filme-image" src="images/clube-da-luta.jpg"></a>
						<div class="filme-nome">Clube da Luta</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">1999</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW" target="_blank"><img class="filme-image" src="images/django-livre.jpg"></a>
						<div class="filme-nome">Django Livre</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2012</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!A8LDGqkCX6Ie"><img class="filme-image" src="images/drive.jpg"></a>
						<div class="filme-nome">Drive</div>
						<span class="filme-nota">8.5/10</span>
						<span class="filme-ano">2011</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5"><img class="filme-image" src="images/era-uma-vez-em-hollywood.jpg"></a>
						<div class="filme-nome">Era Uma Vez Em Hollywood...</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2019</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://brumbram20.cincopa.com/watch/AwGA8sOtprRN"><img class="filme-image" src="images/faca-a-coisa-certa.jpg"></a>
						<div class="filme-nome">Faça A Coisa Certa</div>
						<span class="filme-nota">9.5/10</span>
						<span class="filme-ano">1990</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://ficeg17545.cincopa.com/watch/A4HAcLOLOO68!A8CDAK1ucplu"><img class="filme-image" src="images/meupai.jpg"></a>
						<div class="filme-nome">Meu Pai</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2020</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne"><img class="filme-image" src="images/o-grande-lebowski.jpg"></a>
						<div class="filme-nome">o Grande Lebowski</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2001</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://kaioneziofilmes.cdn.spotlightr.com/watch/MTI3OTA0Nw=="><img class="filme-image" src="images/tetlamt.jpg"></a>
						<div class="filme-nome">Tudo Em Todo Lugar Ao Mesmo Tempo</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2022</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

			</div>

			<h1>Animações</h1>

			<div class="row">
				<div class="content">
					<div class="filme-content">
						<a href="https://scottsilva921.wistia.com/medias/fbdquiess2" target="_blank"><img class="filme-image" src="images/ilha-dos-cachorros.jpg"></a>
						<div class="filme-nome">Ilha dos Cachorros</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">2018</span>
					</div>
					<div class="filme-more"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

		</div>
                        
	</body>

</html>