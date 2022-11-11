<?php
	include 'header.php';
	include 'get_filmes.php';
	include 'get_categorias.php';
?>
	<head>

		<title>Nezzo Filmes</title>

		<style>
			input[type=text], select {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  border-radius: 4px;
			  box-sizing: border-box;
			}

			input[type=submit] {
			  width: 100%;
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}

			input[type=submit]:hover {
			  background-color: #45a049;
			}

			div {
			  border-radius: 5px;
			  background-color: #f2f2f2;
			  padding: 20px;
			}
			</style>

	</head>

	<body>

		<div class="content-main">
			<form action="/action_page.php">
				<label for="login">Login:</label>
			    <input type="text" id="login" name="login" placeholder="Seu login">

			    <label for="senha">Senha:</label>
			    <input type="text" id="senha" name="senha" placeholder="Sua senha">
			  
			    <input type="submit" value="Submit">
			</form>
		</div>

		<script>
		
		</script>
    
	</body>

</html>