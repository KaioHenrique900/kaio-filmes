<?php
	include 'header.php';
?>
	<head>

		<title>Kaio Movies</title>

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
		  <a href="#home" class="active">Home</a>
		  <a href="#generos">Gêneros <i class='fa fa-angle-down'></i></a>
		  <a href="#destaques">Destaques <i class='fa fa-angle-down'></i></a>
		  <a href="#patrocinadores">Patrocinadores <i class='fa fa-angle-down'></i></a>
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
			<center>
				<div class="ad1" >
					<a href="https://amzn.to/3q6hspa" target="_blank"><img src="https://m.media-amazon.com/images/I/714Rq4k05UL._AC_SY355_.jpg" ></a>
					<a href="https://amzn.to/3q6hspa" class="title-product" target="_blank">Echo Dot (4ª Geração): Smart Speaker com Alexa | Música, informação e Casa Inteligente - Cor Preta</a>
				</div>
			</center>

			<h1>Melhores Filmes</h1>

			<div class="row">
				<div class="content">
					<div class="filme-content">
						<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL" target="_blank"><img class="filme-image" src="images/2001-uma-odisseia-no-espaco.jpg"></a>
						<div class="filme-nome">2001: Uma Odisséia No Espaço</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">1969</span>
					</div>
					<div class="filme-more" onclick="showModal('https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL', '2001: Uma Odisséia No Espaço', '10', '1969', '2h19','images/2001-uma-odisseia-no-espaco-horizontal.jpg', 'Stanley Kubrick', 'Uma estrutura imponente preta fornece uma conexão entre o passado e o futuro nesta adaptação enigmática de um conto reverenciado de ficção científica do autor Arthur C. Clarke. Quando o Dr. Dave Bowman e outros astronautas são enviados para uma misteriosa missão, os chips de seus computadores começam a mostrar um comportamento estranho, levando a um tenso confronto entre homem e máquina que resulta em uma viagem alucinante no espaço e no tempo.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE" target="_blank"><img class="filme-image" src="images/cidade-de-deus.jpg"></a>
						<div class="filme-nome">Cidade de Deus</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2002</span>
					</div>
					<div class="filme-more" onclick="showModal('https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE', 'Cidade de Deus', '9', '2002', '2h10','images/cidade-de-deus-horizontal.jpg', 'Kátia Lund, Fernando Meirelles', 'Buscapé é um jovem pobre, negro e sensível, que cresce em um universo de muita violência. Ele vive na Cidade de Deus, favela carioca conhecida por ser um dos locais mais violentos do Rio. Amedrontado com a possibilidade de se tornar um bandido, Buscapé é salvo de seu destino por causa de seu talento como fotógrafo, o qual permite que siga carreira na profissão. É por meio de seu olhar atrás da câmera que ele analisa o dia a dia da favela em que vive, onde a violência aparenta ser infinita.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUEDErUQVruA" target="_blank"><img class="filme-image" src="images/clube-da-luta.jpg"></a>
						<div class="filme-nome">Clube da Luta</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">1999</span>
					</div>
					<div class="filme-more" onclick="showModal('https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUEDErUQVruA', 'Clube da Luta', '10', '1999', '2h19','images/clube-da-luta-horizontal.jpg', 'David Fincher', 'Um homem deprimido que sofre de insônia conhece um estranho vendedor chamado Tyler Durden e se vê morando em uma casa suja depois que seu perfeito apartamento é destruído. A dupla forma um clube com regras rígidas onde homens lutam. A parceria perfeita é comprometida quando uma mulher, Marla, atrai a atenção de Tyler.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW" target="_blank"><img class="filme-image" src="images/django-livre.jpg"></a>
						<div class="filme-nome">Django Livre</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2012</span>
					</div>
					<div class="filme-more" onclick="showModal('https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW', 'Django Livre', '9', '2012', '2h45','images/django-livre-horizontal.jpg', 'Quentin Tarantino', 'No sul dos Estados Unidos, o ex-escravo Django faz uma aliança inesperada com o caçador de recompensas Schultz para caçar os criminosos mais procurados do país e resgatar sua esposa de um fazendeiro que força seus escravos a participar de competições mortais.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!A8LDGqkCX6Ie" target="_blank"><img class="filme-image" src="images/drive.jpg"></a>
						<div class="filme-nome">Drive</div>
						<span class="filme-nota">8.5/10</span>
						<span class="filme-ano">2011</span>
					</div>
					<div class="filme-more" onclick="showModal('https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!A8LDGqkCX6Ie', 'Drive', '8.5', '2011', '1h40','images/drive-horizontal.jpg', 'Nicolas Winding Refn', 'Um habilidoso motorista, que é dublê em cenas de perseguição em filmes de Hollywood, também usa seu talento no volante para ser piloto de fuga em assaltos. Seu estilo de vida solitário e misterioso começa a mudar no momento em que se apaixona por uma mulher cujo marido está prestes a sair da prisão. Enquanto isso, o chefe da sua oficina mecânica está tentando organizar uma corrida com dinheiro sujo.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5" target="_blank"><img class="filme-image" src="images/era-uma-vez-em-hollywood.jpg"></a>
						<div class="filme-nome">Era Uma Vez Em Hollywood...</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2019</span>
					</div>
					<div class="filme-more" onclick="showModal('https://scottsilva921.cincopa.com/watch/A4HAcLOLOO68!AsID8hk7PIz5', 'Era Uma Vez Em... Hollywood', '9', '2019', '2h','images/era-uma-vez-em-hollywood-horizontal.jpg', 'Quentin Tarantino', 'No final da década de 1960, Hollywood começa a se transformar e o astro de TV Rick Dalton e seu dublê Cliff Booth tentam acompanhar as mudanças.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://brumbram20.cincopa.com/watch/AwGA8sOtprRN" target="_blank"><img class="filme-image" src="images/faca-a-coisa-certa.jpg"></a>
						<div class="filme-nome">Faça A Coisa Certa</div>
						<span class="filme-nota">9.5/10</span>
						<span class="filme-ano">1990</span>
					</div>
					<div class="filme-more" onclick="showModal('https://brumbram20.cincopa.com/watch/AwGA8sOtprRN', 'Faça A Coisa Certa', '9.5', '1990', '2h','images/faça-a-coisa-certa-horizontal.jpg', 'Spike Lee', 'Salvatore Sal Fragione é dono de uma pizzaria italiana no Brooklyn que tem uma parede cheia de nomes de artistas famosos. Um dos moradores do bairro, Buggin Out, fica indignado ao ver que na parede só há nomes de artistas italianos. Ele acha que um estabelecimento localizado no Brooklyn deveria ter o nome de atores afrodescendentes, mas Sal não concorda. A parede se torna, então, motivo de ódio para Buggin Out e outros moradores do bairro.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://ficeg17545.cincopa.com/watch/A4HAcLOLOO68!A8CDAK1ucplu" target="_blank"><img class="filme-image" src="images/meupai.jpg"></a>
						<div class="filme-nome">Meu Pai</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2020</span>
					</div>
					<div class="filme-more" onclick="showModal('https://ficeg17545.cincopa.com/watch/A4HAcLOLOO68!A8CDAK1ucplu', 'Meu Pai', '10', '2020', '1h37','images/meupai-horizontal.jpg', 'Florian Zeller', 'Um homem recusa toda a ajuda de sua filha à medida que envelhece. Ele começa a duvidar dos entes queridos, de sua própria mente e de sua realidade ao tentar compreender as mudanças que estão acontecendo em sua vida.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne" target="_blank"><img class="filme-image" src="images/o-grande-lebowski.jpg"></a>
						<div class="filme-nome">O Grande Lebowski</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2001</span>
					</div>
					<div class="filme-more" onclick="showModal('https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoGDCmkMBMne', 'O Grande Lebowski', '9', '1998', '1h40','images/o-grande-lebowski-horizontal.jpg', 'Coens Brother', 'Jeff Lebowski é um boa vida que acaba se envolvendo com a história de um milionário com o mesmo nome. O ricaço pede ajuda a Jeff para entregar o dinheiro do resgate de sua esposa, que foi sequestrada por bandidos perigosos.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://kaioneziofilmes.cincopa.com/watch/A4HAcLOLOO68!AcDDgx19JUUT" target="_blank"><img class="filme-image" src="images/tetlamt.jpg"></a>
						<div class="filme-nome">Tudo Em Todo Lugar Ao Mesmo Tempo</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2022</span>
					</div>
					<div class="filme-more" onclick="showModal('https://kaioneziofilmes.cincopa.com/watch/A4HAcLOLOO68!AcDDgx19JUUT', 'Tudo Em Todo Lugar Ao Mesmo Tempo', '10', '2022', '2h19','images/tetlamt-horizontal.jpg', 'Daniel Kwan, Daniel Scheinert', 'Uma ruptura interdimensional bagunça a realidade e uma inesperada heroína precisa usar seus novos poderes para lutar contra os perigos bizarros do multiverso.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

			</div>

			<h1>Animações</h1>

			<div class="row">
				<div class="content">
					<div class="filme-content">
						<a href="https://kaioneziofilmes.cincopa.com/watch/A4HAcLOLOO68!AgBDmwVQPwUG" target="_blank"><img class="filme-image" src="images/ilha-dos-cachorros.jpg"></a>
						<div class="filme-nome">Ilha dos Cachorros</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">2018</span>
					</div>
					<div class="filme-more" onclick="showModal('https://kaioneziofilmes.cincopa.com/watch/A4HAcLOLOO68!AgBDmwVQPwUG', 'Ilha dos Cachorros', 'None', '2018', '1h42','images/ilha-dos-cachorros-horizontal.jpg', 'Wes Anderson', 'Atari Kobayashi é um garoto japonês de 12 anos de idade. Ele mora na cidade de Megasaki, sob tutela do corrupto prefeito Kobayashi. O político aprova uma nova lei que proíbe os cachorros de morarem no local, fazendo com que todos os animais sejam enviados a uma ilha vizinha repleta de lixo. Mas o pequeno Atari não aceita se separar do cachorro Spots. Ele convoca os amigos, rouba um jato em miniatura e parte em busca de seu fiel amigo. A aventura vai transformar completamente a vida da cidade.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://kaioneziofilmes.cincopa.com/watch/A4HAcLOLOO68!AYED2u125n6W" target="_blank"><img class="filme-image" src="images/red.jpg"></a>
						<div class="filme-nome">Red: Crescer É Uma Fera</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">2022</span>
					</div>
					<div class="filme-more" onclick="showModal('https://kaioneziofilmes.cincopa.com/watch/A4HAcLOLOO68!AYED2u125n6W', 'Red: Crescer É Uma Fera', 'None', '2022', '1h40','images/red-horizontal.jpg', 'Domee Shi', 'Uma menina de 13 anos começa a se transformar em um panda vermelho gigante sempre que fica animada.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

			</div>

			<center>
				<div class="ad1">
					<a href="https://amzn.to/3cFN0it" target="_blank"><img src="https://m.media-amazon.com/images/I/51degAt5CFL._AC_SX569_.jpg" ></a>
					<a href="https://amzn.to/3cFN0it" class="title-product" target="_blank">Fire TV Stick | Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)</a>
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
			  <p id="sinopseFilme"></p>
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