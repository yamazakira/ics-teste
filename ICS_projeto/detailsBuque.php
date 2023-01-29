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

		$id = $row['id'];
              $nome = $row['nome'];
	       $preco = $row['preco'];
	       $flor_id = $row['flor_id'];
             
  	}

  	$resultflor = mysqli_query($db,"SELECT nome FROM flor WHERE id = '$flor_id'");
	$rowflor = mysqli_fetch_assoc($resultflor);
              
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
				<td><?php echo $preco; ?></td>
			</tr>
			<tr>
				<td><strong>Flor:</strong></td>
				<td><?php echo $rowflor['nome']; ?></td>
		</tbody>
	</table>
	<a href="indexBuque.php">Return</a></td>

</body>

</html>