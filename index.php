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
			  		<a href="#">Ação</a>
	    			<a href="#">Animação</a>
	    			<a href="#">Comédia</a>
	    			<a href="#">Drama</a>
	    			<a href="#">Fantasia e Ficção Científica</a>
	    			<a href="#">Romance</a>
	    			<a href="#">Suspense e Terror</a>
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
					$filmes = getMelhores();
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						$duracao = $filme['duracaoFilme'];
						$sinopse = $filme['sinopseFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more' onclick='showModal(\'".$link."\', \'".$titulo."\', \'".$nota."\', \'".$ano."\', \'".$duracao."\', \'images/".$capa."\', \'direcao\', \'".$sinopse."\')'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>
				<!--
				<div class="content">
					<div class="filme-content">
						<a href="" target="_blank"><img class="filme-image" src="images/"></a>
						<div class="filme-nome"></div>
						<span class="filme-nota">/10</span>
						<span class="filme-ano"></span>
					</div>
					<div class="filme-more" onclick="showModal('https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AEFDgmUFT-oL', '2001: Uma Odisséia No Espaço', '10', '1969', '2h19','images/2001-uma-odisseia-no-espaco-horizontal.jpg', 'Stanley Kubrick', 'Uma estrutura imponente preta fornece uma conexão entre o passado e o futuro nesta adaptação enigmática de um conto reverenciado de ficção científica do autor Arthur C. Clarke. Quando o Dr. Dave Bowman e outros astronautas são enviados para uma misteriosa missão, os chips de seus computadores começam a mostrar um comportamento estranho, levando a um tenso confronto entre homem e máquina que resulta em uma viagem alucinante no espaço e no tempo.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE" target="_blank"><img class="filme-image" src="images/cidade-de-deus.jpg"></a>
						<div class="filme-nome">Cidade de Deus</div>
						<span class="filme-nota">9.5/10</span>
						<span class="filme-ano">2002</span>
					</div>
					<div class="filme-more" onclick="showModal('https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AwCDbmEwYXZE', 'Cidade de Deus', '9.5', '2002', '2h10','images/cidade-de-deus-horizontal.jpg', 'Kátia Lund, Fernando Meirelles', 'Buscapé é um jovem pobre, negro e sensível, que cresce em um universo de muita violência. Ele vive na Cidade de Deus, favela carioca conhecida por ser um dos locais mais violentos do Rio. Amedrontado com a possibilidade de se tornar um bandido, Buscapé é salvo de seu destino por causa de seu talento como fotógrafo, o qual permite que siga carreira na profissão. É por meio de seu olhar atrás da câmera que ele analisa o dia a dia da favela em que vive, onde a violência aparenta ser infinita.')"><div class="material-symbols-outlined">expand_more</div></div>
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
						<span class="filme-nota">9.5/10</span>
						<span class="filme-ano">2012</span>
					</div>
					<div class="filme-more" onclick="showModal('https://domolal955.cincopa.com/watch/A4HAcLOLOO68!A8ED_mUpJjvW', 'Django Livre', '9.5', '2012', '2h45','images/django-livre-horizontal.jpg', 'Quentin Tarantino', 'No sul dos Estados Unidos, o ex-escravo Django faz uma aliança inesperada com o caçador de recompensas Schultz para caçar os criminosos mais procurados do país e resgatar sua esposa de um fazendeiro que força seus escravos a participar de competições mortais.')"><div class="material-symbols-outlined">expand_more</div></div>
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
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">1990</span>
					</div>
					<div class="filme-more" onclick="showModal('https://brumbram20.cincopa.com/watch/AwGA8sOtprRN', 'Faça A Coisa Certa', '9', '1990', '2h','images/faça-a-coisa-certa-horizontal.jpg', 'Spike Lee', 'Salvatore Sal Fragione é dono de uma pizzaria italiana no Brooklyn que tem uma parede cheia de nomes de artistas famosos. Um dos moradores do bairro, Buggin Out, fica indignado ao ver que na parede só há nomes de artistas italianos. Ele acha que um estabelecimento localizado no Brooklyn deveria ter o nome de atores afrodescendentes, mas Sal não concorda. A parede se torna, então, motivo de ódio para Buggin Out e outros moradores do bairro.')"><div class="material-symbols-outlined">expand_more</div></div>
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
				</div> -->

			</div> 

			<h1>Animações</h1>

			<div class="row row-responsive">

				<?php 
					$filmes = getAnimacoes();
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

				<!--<div class="content">
					<div class="filme-content">
						<a href="https://brumbram20.cincopa.com/watch/A4HAcLOLOO68!AgHDyw0fq18k" target="_blank"><img class="filme-image" src="images/homem-aranha-no-aranhaverso.jpg"></a>
						<div class="filme-nome">Homem-Aranha No Aranhaverso</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2018</span>
					</div>
					<div class="filme-more" onclick="showModal('https://brumbram20.cincopa.com/watch/A4HAcLOLOO68!AgHDyw0fq18k', 'Homem-Aranha No Aranhaverso', '10', '2018', '1h40','images/homemaranha-no-aranhaverso-horizontal.jpg', ' Peter Ramsey, Bob Persichetti, Rodney Rothman', 'Após ser atingido por uma teia radioativa, Miles Morales, um jovem negro do Brooklyn, se torna o Homem-Aranha, inspirado no legado do já falecido Peter Parker. Entretanto, ao visitar o túmulo de seu ídolo em uma noite chuvosa, ele é surpreendido com a presença do próprio Peter, vestindo o traje do herói por baixo de um sobretudo. A surpresa fica ainda maior quando Miles descobre que ele veio de uma dimensão paralela, assim como outras versões do Homem-Aranha.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

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
						<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AUMDznUDu-oS" target="_blank"><img class="filme-image" src="images/o-fantastico-sr-raposo.jpg"></a>
						<div class="filme-nome">O Fantástico Sr. Raposo</div>
						<span class="filme-nota">8.5/10</span>
						<span class="filme-ano">2009</span>
					</div>
					<div class="filme-more" onclick="showModal('https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AUMDznUDu-oS', 'O Fantástico Sr. Raposo', '8.5', '2009', '1h27','images/o-fantastico-sr-raposo-horizontal.jpg', 'Wes Anderson', 'Após 12 anos de felicidade bucólica, o Sr. Raposo descumpre a promessa que fez à esposa e invade as fazendas dos vizinhos Boggis, Bunce e Bean. Ceder aos seus instintos animais coloca em perigo não somente o seu casamento, mas também a vida de sua família e seus amigos. Quando os fazendeiros montam uma armadilha para o Sr. Raposo, ele tem que confiar na sua astúcia natural para vencer o oponente.')"><div class="material-symbols-outlined">expand_more</div></div>
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

				<div class="content">
					<div class="filme-content">
						<a href="https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF" target="_blank"><img class="filme-image" src="images/shrek.jpg"></a>
						<div class="filme-nome">Shrek</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2001</span>
					</div>
					<div class="filme-more" onclick="showModal('https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF', 'Shrek', '10', '2001', '1h29','images/shrek-horizontal.jpg', 'Andrew Adamson, Vicky Jenson', 'Com a intenção de salvar sua casa, um ogro e seu burro fazem um acordo com um Lorde maldoso para resgatar uma linda princesa.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AIGDbrkeXO-F" target="_blank"><img class="filme-image" src="images/shrek2.jpg"></a>
						<div class="filme-nome">Shrek 2</div>
						<span class="filme-nota">9.5/10</span>
						<span class="filme-ano">2004</span>
					</div>
					<div class="filme-more" onclick="showModal('https://scottsilva921.cincopa.com/watch/AcHAltu0tQtF', 'Shrek 2', '9.5', '2004', '1h33','images/shrek2-horizontal.jpg', 'Andrew Adamson, Kelly Asbury', 'Shrek e Fiona acabaram de voltar da lua de mel e vivem felizes em sua casa no pântano. O casal recebe um convite dos pais da princesa, que querem conhecer o novo genro, para um jantar no castelo. Eles ficaram sabendo que Fiona havia se casado com o seu verdadeiro amor, mas o que eles ainda não sabem é que este amor é um ogro mal-educado de mais de 300 quilos, que conta com um burro falante como melhor amigo.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUDDqukX2cfF" target="_blank"><img class="filme-image" src="images/shrek3.jpg"></a>
						<div class="filme-nome">Shrek 3</div>
						<span class="filme-nota">8.5/10</span>
						<span class="filme-ano">2007</span>
					</div>
					<div class="filme-more" onclick="showModal('https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AUDDqukX2cfF', 'Shrek 3', '8.5', '2007', '1h33','images/shrek3-horizontal.jpg', 'Chris Miller, Raman Hui', 'Doente em estado terminal, o rei Harold chama Fiona e Shrek para uma conversa sobre a sucessão de seu reinado e o futuro do povo em Tão Tão Distante. Como o genro se recusa a assumir o trono e prefere continuar sua pacata vida no pântano, a única saída é encontrar o primo Artur. Na companhia do Burro e do Gato de Botas, Shrek se encarrega da missão e sai em busca do parente que pode ser seu substituto no trono. Mas, antes de cumprir a tarefa, enfrenta as armações do ambicioso Príncipe Encantado.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://siponin817.cincopa.com/watch/A4HAcLOLOO68!AgBD4xVhB_cc" target="_blank"><img class="filme-image" src="images/viva.jpg"></a>
						<div class="filme-nome">Viva: A Vida É Uma Festa</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">2017</span>
					</div>
					<div class="filme-more" onclick="showModal('https://siponin817.cincopa.com/watch/A4HAcLOLOO68!AgBD4xVhB_cc', 'Viva: A Vida É Uma Festa', 'None', '2017', '1h45','images/viva-horizontal.jpg', 'Adrian Molina, Lee Unkrich', 'Apesar da proibição da música por gerações de sua família, o jovem Miguel sonha em se tornar um músico talentoso como seu ídolo Ernesto de la Cruz. Desesperado para provar seu talento, Miguel se encontra na deslumbrante e colorida Terra dos Mortos. Depois de conhecer um charmoso malandro chamado Héctor, os dois novos amigos embarcam em uma jornada extraordinária para desvendar a verdadeira história por trás da história da família de Miguel.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>-->

			</div>


			<h1>Comédias</h1>

			<div class="row row-responsive">

				<?php 
					$filmes = getComedias();
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

				<!--<div class="content">
					<div class="filme-content">
						<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AIBDng0uLCd3" target="_blank"><img class="filme-image" src="images/ave-cesar.jpg"></a>
						<div class="filme-nome">Ave, César!</div>
						<span class="filme-nota">7/10</span>
						<span class="filme-ano">2016</span>
					</div>
					<div class="filme-more" onclick="showModal('https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AIBDng0uLCd3', 'Ave, César!', '7', '2016', '1h46','images/avecesar-horizontal.jpg', 'Irmãos Coen', 'Eddie Mannix vive resolvendo os problemas das celebridades de um estúdio de cinema dos anos 50. Para piorar o seu dia, o astro de um filme é sequestrado vestido com as roupas de seu personagem. Se o estúdio não pagar o resgate, será o fim do ator.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0EDMqkKTx4E" target="_blank"><img class="filme-image" src="images/buster-scruggs.jpg"></a>
						<div class="filme-nome">A Balada de Buster Scruggs</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2018</span>
					</div>
					<div class="filme-more" onclick="showModal('https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!A0EDMqkKTx4E', 'A Balada de Buster Scruggs', '9', '2018', '2h12','images/buster-scruggs-horizontal.jpg', 'Irmãos Coen', 'A antologia reúne seis histórias de vida e violência que acontecem no Velho Oeste. Acompanhe as aventuras de um pistoleiro, um assaltante de banco, um empresário viajante, um investigador idoso, um vagão de trem e alguns caçadores de recompensas.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AkCD5m0D5R1H" target="_blank"><img class="filme-image" src="images/dr-fantastico.jpg"></a>
						<div class="filme-nome">Dr. Fantástico</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">1964</span>
					</div>
					<div class="filme-more" onclick="showModal('https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AkCD5m0D5R1H', 'Dr. Fantástico', 'None', '1964', '1h42','images/dr-fantastico-horizontal.jpg', 'Stanley Kubrick', 'Um general insano que acredita que os comunistas planejam dominar o mundo dá ordens para bombardear a Rússia, iniciando processo de guerra nuclear. Ao mesmo tempo, o presidente e seus assessores do Pentágono tentam desesperadamente parar o processo.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AcND5rU2sOnO" target="_blank"><img class="filme-image" src="images/moonrise-kingdom.jpg"></a>
						<div class="filme-nome">Moonrise Kingdom</div>
						<span class="filme-nota">8.5/10</span>
						<span class="filme-ano">2012</span>
					</div>
					<div class="filme-more" onclick="showModal('https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AcND5rU2sOnO', 'Moonrise Kingdom', '8.5', '2012', '1h34','images/moonrise-kingdom-horizontal.jpg', 'Wes Anderson', 'Em 1965, residentes de uma ilha formam uma comunidade aparentemente imune aos males do resto do mundo. Os adolescentes Sam e Suzy se apaixonam e decidem fugir antes da chegada de uma violenta tempestade que ameaça a região.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8PDJjUrKVn6" target="_blank"><img class="filme-image" src="images/mp-calice.jpg"></a>
						<div class="filme-nome">M.P.: Em Busca do Cálice Perdido</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">1975</span>
					</div>
					<div class="filme-more" onclick="showModal('https://u855900.cincopa.com/watch/A4HAcLOLOO68!A8PDJjUrKVn6', 'Monty Python: Em Busca do Cálice Sagrado' ,'10', '1975', '1h32','images/mp-calice-horizontal.jpg', 'Terry Gilliam, Terry Jones', 'O Rei Artur sai à procura de cavaleiros que o acompanhem em uma jornada histórica: a busca do Santo Graal. Aparecem então Sir Lancelot, o Bravo; Sir Robin, o Não-Tão-Bravo-Quanto-Sir-Lancelot; Sir Galahad, o Puro, entre outros personagens surreais. Escrita pelo genial grupo de comédia britânico Monty Python, a trama do longa satiriza diversos eventos históricos ocorridos na Idade Média.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW" target="_blank"><img class="filme-image" src="images/mp-o-sentido-da-vida.jpg"></a>
						<div class="filme-nome">M.P.: O Sentido da Vida</div>
						<span class="filme-nota">8.5/10</span>
						<span class="filme-ano">1983</span>
					</div>
					<div class="filme-more" onclick="showModal('https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AoCDVl0WZGVW', 'Monty Python: O Sentido da Vida', '8.5', '1983', '1h47','images/mp-o-sentido-da-vida-horizontal.jpg', 'Terry Jones, Terry Gilliam', 'As fases da vida são contadas por meio de vários esboços e canções pelo grupo britânico de comédia. As sete peças de cobertura da vida ao nascer, crescer, guerra, idade média, transplantes de órgãos, velhice e morte. Nem todos os estágios são singulares, pois a primeira, O Milagre do Nascimento é a partir da perspectiva de uma mulher ignorada no trabalho de parto e de um casal católico romano com muitas crianças e a Parte VII: Morte abrange um enterro e o céu.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yikobe1150.cincopa.com/watch/A4HAcLOLOO68!AsCDULFDLdr2" target="_blank"><img class="filme-image" src="images/nnnn.jpg"></a>
						<div class="filme-nome">Noivo Neurótico, Noiva Nervosa</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">1977</span>
					</div>
					<div class="filme-more" onclick="showModal('https://yikobe1150.cincopa.com/watch/A4HAcLOLOO68!AsCDULFDLdr2', 'Noivo Neurótico, Noiva Nervosa', '10', '1977', '1h33','images/nnnn-horizontal.jpg', 'Woody Allen', 'Um humorista judeu e divorciado que faz análise há quinze anos, se apaixona por Annie Hall, uma cantora em início de carreira com uma cabeça um pouco complicada. Em pouco tempo eles decidem morar juntos, mas as crises conjugais começam a aparecer e afetar os sentimentos de ambos.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>-->

			</div>

			<h1>Dramas</h1>

			<div class="row row-responsive">

				<?php 
					$filmes = getDramas();
					foreach($filmes as &$filme){
						$link = $filme['linkFilme'];
						$capa = $filme['capaFilme'];
						$titulo = $filme['tituloFilme'];
						$nota = $filme['notaFilme'];
						$ano = $filme['anoFilme'];
						echo "<div class='content'><div class='filme-content'><a href='".$link."' target='_blank'><img class='filme-image' src='images/".$capa."'></a><div class='filme-nome'>".$titulo."</div><span class='filme-nota'>".$nota."/10</span><span class='filme-ano'>".$ano."</span></div><div class='filme-more'><div class='material-symbols-outlined'>expand_more</div></div></div>";
						
					}
				?>

				<!--<div class="content">
					<div class="filme-content">
						<a href="https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AsCDFk0lkdAC" target="_blank"><img class="filme-image" src="images/a-lista-de-schindler.jpg"></a>
						<div class="filme-nome">A Lista de Schindler</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">1993</span>
					</div>
					<div class="filme-more" onclick="showModal('https://lafobo1015.cincopa.com/watch/A4HAcLOLOO68!AsCDFk0lkdAC', 'A Lista de Schindler', 'None', '1993', '3h15','images/a-lista-de-schindler-horizontal.jpg', 'Steven Spielberg', 'O alemão Oskar Schindler viu na mão de obra judia uma solução barata e viável para lucrar com negócios durante a guerra. Com sua forte influência dentro do partido nazista, foi fácil conseguir as autorizações e abrir uma fábrica. O que poderia parecer uma atitude de um homem não muito bondoso, transformou-se em um dos maiores casos de amor à vida da História, pois este alemão abdicou de toda sua fortuna para salvar a vida de mais de mil judeus em plena luta contra o extermínio alemão.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AgMDTqEyZHQb" target="_blank"><img class="filme-image" src="images/boyhood.jpg"></a>
						<div class="filme-nome">BoyHood</div>
						<span class="filme-nota">10/10</span>
						<span class="filme-ano">2014</span>
					</div>
					<div class="filme-more" onclick="showModal('https://yofic27535.cincopa.com/watch/A4HAcLOLOO68!AgMDTqEyZHQb', 'BoyHood', '10', '2014', '2h43','images/boyhood-horizontal.jpg', 'Richard Linklater', 'Acompanhe a vida do garoto Mason durante um período de doze anos, da infância à juventude, analisando seu relacionamento com os pais, suas descobertas, experiências e seus conflitos.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AgIDbmECArNJ" target="_blank"><img class="filme-image" src="images/12-homens-e-uma-sentenca.jpg"></a>
						<div class="filme-nome">12 Homens e Uma Sentença</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">1957</span>
					</div>
					<div class="filme-more" onclick="showModal('https://domolal955.cincopa.com/watch/A4HAcLOLOO68!AgIDbmECArNJ', 'Inside Llewyn Davis', 'None', '1957', '1h36','images/12-homens-e-uma-sentenca-horizontal.jpg', 'Sidney Lumet', 'Seguindo o encerramento do caso do julgamento do assassinato cometido por um adolescente, os membros do júri devem chegar a um consenso sobre qual será o veredito. Enquanto os 12 indivíduos estão fechados em uma sala para tomar uma decisão, onze deles votam pela condenação do réu, porém um deles acredita na inocência do jovem e tenta convencer os outros a mudarem seus votos, dando início a um conflito que ameaça inviabilizar o delicado processo que vai decidir o destino do acusado.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AgHDdjUZa6ch" target="_blank"><img class="filme-image" src="images/inside-llewyn-davis.jpg"></a>
						<div class="filme-nome">Inside Llewyn Davis</div>
						<span class="filme-nota">9/10</span>
						<span class="filme-ano">2013</span>
					</div>
					<div class="filme-more" onclick="showModal('https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AgHDdjUZa6ch', 'Inside Llewyn Davis', '9', '2013', '1h45','images/inside-llewyn-davis-horizontal.jpg', 'Irmãos Coen', 'Llewyn Davis é um cantor e compositor que sonha em viver da sua música. Com o violão nas costas, ele migra de um lugar para o outro na Nova York dos anos 60, sempre vivendo de favor na casa de amigos e outros artistas. Talentoso, mas sem se preocupar muito com o futuro. Nem um pouco confiável, Davis se depara com a oportunidade de viajar na companhia de um consagrado e desagradável artista, Roland, mas nem tudo vai acabar bem nesta nova jornada.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://siponin817.cincopa.com/watch/A4HAcLOLOO68!AgDDRwF_BvRX" target="_blank"><img class="filme-image" src="images/lady-bird.jpg"></a>
						<div class="filme-nome">Lady Bird</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">2017</span>
					</div>
					<div class="filme-more" onclick="showModal('https://siponin817.cincopa.com/watch/A4HAcLOLOO68!AgDDRwF_BvRX', 'Lady Bird', 'None', '2017', '1h34','images/lady-bird-horizontal.jpg', 'Greta Gerwig', 'Christine McPherson está no último ano do colégio e o que mais deseja é fazer faculdade longe de Sacramento, Califórnia, ideia rejeitada por sua mãe. Lady Bird, como a garota de forte personalidade exige ser chamada, não se dá por vencida e leva o plano de ir embora adiante mesmo assim. Enquanto a hora não chega, ela se divide entre as obrigações estudantis no colégio católico, o primeiro namoro, típicos rituais de passagem para a vida adulta e inúmeros desentendimentos com a progenitora.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AUODrqkMDmKI" target="_blank"><img class="filme-image" src="images/o-resgate-do-soldado-ryan.jpg"></a>
						<div class="filme-nome">O Resgate do Soldado Ryan</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">1998</span>
					</div>
					<div class="filme-more" onclick="showModal('https://joxise8323.cincopa.com/watch/A4HAcLOLOO68!AUODrqkMDmKI', 'O Resgate do Soldado Ryan', 'None', '1998', '2h50','images/o-resgate-do-soldado-ryan-horizontal.jpg', 'Steven Spielberg', 'Ao desembarcar na Normandia, no dia 6 de junho de 1944, o Capitão Miller recebe a missão de comandar um grupo do Segundo Batalhão para o resgate do soldado James Ryan, o caçula de quatro irmãos, dentre os quais três morreram em combate. Por ordens do chefe George C. Marshall, eles precisam procurar o soldado e garantir o seu retorno, com vida, para casa.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div>

				<div class="content">
					<div class="filme-content">
						<a href="https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoPDCiEIOfnN" target="_blank"><img class="filme-image" src="images/silencio.jpg"></a>
						<div class="filme-nome">Silêncio</div>
						<span class="filme-nota">None</span>
						<span class="filme-ano">2016</span>
					</div>
					<div class="filme-more" onclick="showModal('https://rabevo9820.cincopa.com/watch/A4HAcLOLOO68!AoPDCiEIOfnN', 'Silêncio' ,'None', '2016', '2h41','images/silencio-horizontal.jpg', 'Martin Scorsese', 'No século 17, dois padres jesuítas portugueses viajaram para o Japão em uma tentativa de localizar seu mentor, que, segundo rumores, havia cometido apostasia e propagado o catolicismo.')"><div class="material-symbols-outlined">expand_more</div></div>
				</div> -->

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