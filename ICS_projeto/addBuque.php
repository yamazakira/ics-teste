<?php
       
       include('connection.php');
       
?>  
<body>
	<h1 class="page-header">
		PHP CRUD <small>Create, Read, Update and Delete</small>
	</h1>

	<h2>Add New Record</h2>
	<br/>
	<form method="post" action="add_postBuque.php">
                            
		<input placeholder="Nome do item" name="nome"><br/><br/>
		<input placeholder="Preço" name="preco"><br/><br/>

		<?php
		
		$query="SELECT nome,id FROM flor ORDER BY nome"; 

		echo "<select name=flor_id value=''>Flor</option>";

		foreach ($db->query($query) as $row){
			echo "<option value=$row[id]>$row[nome]</option>";
		}

		echo "</select>";
		?>
		
		<br/><br/>
		<button type="submit" class="btn btn-success">Save Record</button>&nbsp;
		<button type="reset" class="btn btn-warning">Clear Entry</button>&nbsp;
		<a class="btn btn-info" href="indexBuque.php">Return</a>

	</form>  
</body>

</html>