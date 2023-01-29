<?php
	include('connection.php');
?>  
<body>

	<h1 class="page-header">
		PHP CRUD <small>Create, Read, Update and Delete</small>
	</h1>

	<?php 
	$query = 'SELECT * FROM flor WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['id'];
		$nome= $row['nome'];
		$preco=$row['preco'];

	}
              
	?>

	<h2>Edit Record</h2>

	<form method="post" action="edit_postFlor.php">
                            
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		<input placeholder="Preço" name="preco" value="<?php echo $preco; ?>"><br/><br/>
		<button type="submit" >Update Record</button>
		<a href="indexFlor.php">Return</a>

	</form>  
</body>

</html>