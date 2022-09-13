<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- W3.CSS -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css"> <!-- Colors -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">  <!-- Google Font -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- Google Icons -->

<link rel="stylesheet" href="styles-amazon.css">

<head>
	
	<title>Kaio Associado Amazon</title>

</head>

<body>

	<div id="myModal-info" class="modal-info">

		<!-- Modal content -->
		<div id="modalInfoContent" class="modal-info-content">
		<span class="close-info">&times;</span>
			<p id="modalInfoP"><i class="fa fa-info-circle"></i> Os produtos anunciados nesse site fazem parte do programa Associados Amazon. Para que eu receba as comissões referentes aos mesmos, é preciso que você compre pelos meus links. Caso tenha alguma dúvida ou queira comprar algum produto que não esteja presente aqui, entre em contato comigo pelo meu instagram <a href="https://www.instagram.com/kaionezio/" style="color: gray;">@kaionezio</a>.</p>
		</div>

	</div>

	<div class="w3-bar nav">
		<img src="images-associados/associados-amazon2.png" class="img-associados w3-right">
	  	<a href="index.php" class="w3-bar-item w3-button w3-text-white back">Nezzo Filmes</a>
	  	<!--<a href="primevideo.php" class="w3-bar-item w3-button w3-text-white w3-right">Prime Video</a>
	  	<a href="#" class="w3-bar-item w3-button w3-text-white w3-right">Link 2</a>
	  	<a href="#" class="w3-bar-item w3-button w3-text-white w3-right">Link 3</a>-->
	</div>

	<div class="top-page">

		<div class="w3-content w3-display-container" style="max-width:100%">

		  <img class="banner mySlides" src="images-associados/prime-banner2.jpg" style="width:100%">
		  <img class="banner mySlides" src="images-associados/books-banner.jpg" style="width:100%">
		  <img class="banner mySlides" src="images-associados/family-banner.jpg" style="width:100%">
		  <div class="w3-center w3-container w3-section w3-large w3-text-orange w3-display-bottommiddle" style="width:100%">
		    <div class="w3-left w3-hover-text-orange" onclick="plusDivs(-1)">&#10094;</div>
		    <div class="w3-right w3-hover-text-orange" onclick="plusDivs(1)">&#10095;</div>
		    <span class="w3-badge demo w3-border w3-border-orange w3-transparent w3-hover-orange" onclick="currentDiv(1)"></span>
		    <span class="w3-badge demo w3-border w3-border-orange w3-transparent w3-hover-orange" onclick="currentDiv(2)"></span>
		    <span class="w3-badge demo w3-border w3-border-orange w3-transparent w3-hover-orange" onclick="currentDiv(3)"></span>
		  </div>

		</div>

		<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" w3-orange", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-orange";
		}

		var slideIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";
		    dots[i].className = dots[i].className.replace(" w3-orange", "");
		  }
		  slideIndex++;
		  if (slideIndex > x.length) {slideIndex = 1}
		  x[slideIndex-1].style.display = "block";
		  setTimeout(carousel, 5000); // Change image every 2 seconds
		  dots[slideIndex-1].className += " w3-orange";
		}
		</script>

	</div>

	<h1 class="title-row">Produtos em Destaque</h1>
	<div class="container_produtos1">
		<a href="https://amzn.to/3B7n7QN" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/7160q6CR0oL._AC_SX425_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Fone de Ouvido JBL Tune 110 Intra-Auricular Preto - JBLT110BLK</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3U3b0Nq" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/714Rq4k05UL._AC_SY355_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Echo Dot (4ª Geração): Smart Speaker com Alexa - Cor Preta</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3RXzyFs" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/51degAt5CFL._AC_SX569_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Fire TV Stick | Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3L2Oxfn" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/51kYAhF49CL._SX352_BO1,204,203,200_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Drácula - Dark Edition: Edição limitada para caçadores de vampiros</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3U1EkUh" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/61X0ISBpD-L._AC_SX679_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Kindle 10a. geração com bateria de longa duração - Cor Preta</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3L9krXp" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/71r4YBz43GL.__AC_SX300_SY300_QL70_ML2_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Maleta de ferramentas kit com 129 peças 13564 Sparta</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3qwKQow" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/51pIlgIyjZL.__AC_SX300_SY300_QL70_ML2_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Notebook Lenovo Ultrafino IdeaPad 3i i3-10110U 4GB 256 GB SSD Windows 11 15.6" 82BS000JBR Prata</p>
		    </div>

		</div></a>
	</div>

	<!-- Next Line-->

	<h1 class="title-row">Livros</h1>
	<div class="container_produtos1">
		<a href="https://amzn.to/3qquIVP" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/812gHuYZN+L.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Box Obras De George Orwell + Pôster + Marcadores + Cards</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3RTHis9" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/51kYAhF49CL._SX352_BO1,204,203,200_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Drácula - Dark Edition: Edição limitada para caçadores de vampiros</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3d2hCuT" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/61NSQSDR2+S.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>A divina comédia - Box com 3 livros</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3L3FA5e" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/71XQQ1AV6EL.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Box Terríveis Mestres (3 livros + pôster + suplemento)</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3eGxNhV" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/51pWrJSOTcL.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Clube da Luta - Edição Slim</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3L6uCMu" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/71mFnG3Bn3L.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>A Metamorfose Capa dura</p>
		    </div>

		</div></a>

		<a href="https://amzn.to/3Qwm42t" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/91M9xPIf10L.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>O Hobbit + pôster Capa dura</p>
		    </div>

		</div></a>
	</div>

	<div class="footer tooltip">Desenvolvido por <a href="https://www.instagram.com/kaionezio/" target="_blank">Kaio Nezio <i class="fa fa-external-link-square"></i></a>
		<span class="tooltiptext">Entre em contato comigo pelo meu instagram em caso de dúvida ou se quiser comprar outro produto usando um link meu.</span>
	</div>

	<script>
		// Get the modal
		var modal = document.getElementById("myModal-info");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close-info")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
	</script>

	<!--<div class="image_prime">
		<img src="images-associados/coda.jpg">
	</div>-->

</body>

</html>