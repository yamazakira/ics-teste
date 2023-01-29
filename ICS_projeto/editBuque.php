<?php
	include('connection.php');

?>  
<body>

	<h1 class="page-header">
		PHP CRUD <small>Create, Read, Update and Delete</small>
	</h1>

	<?php 
	$query = 'SELECT * FROM buque WHERE id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id=$row['id'];
		$nome=$row['nome'];
		$preco=$row['preco'];
		$flor_id=$row['flor_id'];
	}
              
	?>

	<h2>Edit Record</h2>

	<form method="post" action="edit_postBuque.php">
                            
	    <input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		<input placeholder="Preço" name="preco" value="<?php echo $preco; ?>"><br/><br/>

		<?php
		
		$query1="SELECT nome,id FROM flor ORDER BY nome";

		echo "<select name=flor_id value=''>Flor</option>";

		foreach ($db->query($query1) as $row){
			echo "<option value=$row[id]>$row[nome]</option>";
		}

		echo "</select>";
		?>

		<button type="submit" >Update Record</button>
		<a href="indexBuque.php">Return</a>

	</form>  
</body>

</html>