<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		
		include('connection.php');
		
		$query = 'UPDATE flor set nome ="'.$nome.'",
				preco ="'.$preco.'" WHERE
				id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
		?>	

		<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "indexFlor.php";
		</script>
	</body>
</html>