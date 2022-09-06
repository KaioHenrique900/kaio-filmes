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

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!-- Google Icons -->

<link rel="stylesheet" href="styles-amazon.css">

<head>
	
	<title>Kaio Associado Amazon</title>

</head>

<body>

	<div class="w3-bar nav">
		<img src="images-associados/associados-amazon2.png" class="img-associados">
	  	<a href="index.php" class="w3-bar-item w3-button w3-text-white">Nezzo Filmes</a>
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

	<div class="container_produtos1">
		<a href="https://www.amazon.com.br/Fone-Ouvido-JBL-Intra-Auricular-Preto/dp/B01MG62Z5M?_encoding=UTF8&pd_rd_w=v2fVB&content-id=amzn1.sym.717e1082-1b26-481d-94d5-2a1a46904215&pf_rd_p=717e1082-1b26-481d-94d5-2a1a46904215&pf_rd_r=KHKPB3BB4E9V7GSMRDZK&pd_rd_wg=STZUU&pd_rd_r=36a3b826-48b5-4d7f-94f5-c762cde57462&th=1&linkCode=ll1&tag=kaionezio-20&linkId=dce26af364b5fa240a8d3dac97100b73&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/7160q6CR0oL._AC_SX425_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Fone de Ouvido JBL Tune 110 Intra-Auricular Preto - JBLT110BLK</p>
		    </div>

		</div></a>

		<a href="https://www.amazon.com.br/Novo-Echo-Dot-4%C2%AA-gera%C3%A7%C3%A3o/dp/B084DWCZY6?_encoding=UTF8&pd_rd_w=sOken&content-id=amzn1.sym.717e1082-1b26-481d-94d5-2a1a46904215&pf_rd_p=717e1082-1b26-481d-94d5-2a1a46904215&pf_rd_r=2GZE6XN0NGQQSXADQMTH&pd_rd_wg=PZOSA&pd_rd_r=d1ff6942-0798-44f9-a654-1a7a01f66fe2&linkCode=ll1&tag=kaionezio-20&linkId=9249091e2f1f2719a552c2e9b3c10b20&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/714Rq4k05UL._AC_SY355_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Echo Dot (4ª Geração): Smart Speaker com Alexa - Cor Preta</p>
		    </div>

		</div></a>

		<a href="https://www.amazon.com.br/gp/product/B08C1K6LB2?pf_rd_r=2GZE6XN0NGQQSXADQMTH&pf_rd_p=bd4ed9ad-d973-4c4f-8048-f2a06fad1c3d&pd_rd_r=d1ff6942-0798-44f9-a654-1a7a01f66fe2&pd_rd_w=VTYTM&pd_rd_wg=PZOSA&linkCode=ll1&tag=kaionezio-20&linkId=f5fb2a16de3e359ba3445c5165e46cbb&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/51degAt5CFL._AC_SX569_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Fire TV Stick | Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)</p>
		    </div>

		</div></a>

		<a href="https://www.amazon.com.br/Dr%C3%A1cula-Bram-Stoker/dp/8566636236?_encoding=UTF8&pd_rd_w=QqrUP&content-id=amzn1.sym.df4ac1cc-1218-4e71-aa2e-283172bce35c&pf_rd_p=df4ac1cc-1218-4e71-aa2e-283172bce35c&pf_rd_r=2GZE6XN0NGQQSXADQMTH&pd_rd_wg=PZOSA&pd_rd_r=d1ff6942-0798-44f9-a654-1a7a01f66fe2&linkCode=ll1&tag=kaionezio-20&linkId=966ebdb4640d6ae490b177a301377758&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/51kYAhF49CL._SX352_BO1,204,203,200_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Drácula - Dark Edition: Edição limitada para caçadores de vampiros</p>
		    </div>

		</div></a>

		<a href="https://www.amazon.com.br/gp/product/B07FQK1TS9?pf_rd_r=2GZE6XN0NGQQSXADQMTH&pf_rd_p=bd4ed9ad-d973-4c4f-8048-f2a06fad1c3d&pd_rd_r=d1ff6942-0798-44f9-a654-1a7a01f66fe2&pd_rd_w=VTYTM&pd_rd_wg=PZOSA&linkCode=ll1&tag=kaionezio-20&linkId=1e41642ac12051eacb52898796520b45&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://m.media-amazon.com/images/I/61X0ISBpD-L._AC_SX679_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Kindle 10a. geração com bateria de longa duração - Cor Preta</p>
		    </div>

		</div></a>

		<a href="https://www.amazon.com.br/Maleta-Ferramentas-Sparta-Kit-13564/dp/B076N2S8FV?pd_rd_w=5lq7E&content-id=amzn1.sym.d0678f90-6ba8-4016-a488-d64fcc14d544&pf_rd_p=d0678f90-6ba8-4016-a488-d64fcc14d544&pf_rd_r=KEPPACVF0H7AX50DEE7Y&pd_rd_wg=so5VS&pd_rd_r=4b0afc05-75f0-4bef-a4d7-5f972828e446&pd_rd_i=B076N2S8FV&psc=1&linkCode=ll1&tag=kaionezio-20&linkId=a7b83420a814a04c18c61d44a5fe9dd6&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/71r4YBz43GL.__AC_SX300_SY300_QL70_ML2_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Maleta de ferramentas kit com 129 peças 13564 Sparta</p>
		    </div>

		</div></a>

		<a href="https://www.amazon.com.br/Notebook-Lenovo-Ultrafino-i3-10110U-82BS000JBR/dp/B09J7RX44K?pd_rd_w=5lq7E&content-id=amzn1.sym.d0678f90-6ba8-4016-a488-d64fcc14d544&pf_rd_p=d0678f90-6ba8-4016-a488-d64fcc14d544&pf_rd_r=KEPPACVF0H7AX50DEE7Y&pd_rd_wg=so5VS&pd_rd_r=4b0afc05-75f0-4bef-a4d7-5f972828e446&pd_rd_i=B09J7RX44K&psc=1&linkCode=ll1&tag=kaionezio-20&linkId=2680c02a2fc803cf1cf9539eaa568bbc&language=pt_BR&ref_=as_li_ss_tl" target="_blank"><div class="w3-card-4 w3-white card_produto">

		    <div class="w3-container w3-center">
		      <img class="img_produto" src="https://images-na.ssl-images-amazon.com/images/I/51pIlgIyjZL.__AC_SX300_SY300_QL70_ML2_.jpg" alt="Avatar">
		    </div>

		    <div class="w3-container w3-center w3-black">
		      <p>Notebook Lenovo Ultrafino IdeaPad 3i i3-10110U 4GB 256 GB SSD Windows 11 15.6" 82BS000JBR Prata</p>
		    </div>

		</div></a>
	</div>

	<div class="image_prime">
		<img src="images-associados/coda.jpg">
	</div>

</body>

</html>