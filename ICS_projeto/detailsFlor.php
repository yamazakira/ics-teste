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

		$id = $row['id'];
              $nome = $row['nome'];
             	$preco = $row['preco'];

             
  	}
              
	?>

	<h2>Detailed Record</h2>
	<table>
		<tbody>
			<tr>
				<td><strong>Id:</strong></td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td><strong>Nome:</strong></td>
				<td><?php echo $nome; ?></td>
			</tr>
			<tr>
				<td><strong>Preço:</strong></td>
				<td>R$ <?php echo $preco; ?></td>
			</tr>

		</tbody>
	</table>
	<a href="indexFlor.php">Return</a></td>

</body>

</html>
