<html>

	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
		
	$query = "INSERT INTO flor
			(nome, preco)
			VALUES ('".$nome."','".$preco."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso.");
		window.location = "indexFlor.php";
	</script>

</body>

</html>