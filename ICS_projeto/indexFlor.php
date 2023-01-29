<?php
       include('connection.php');
?>
<body>

	<h1>
		Flor e Cultura <small> - PHP CRUD ICS 2022 </small>
	</h1>
	
	<h2>Listagem de flores</h2>
	<br/>
	<a href="addFlor.php">Adicionar nova flor |</a>
	<a href="indexBuque.php"> Listagem de Buquês</a>
	<br/><br/>
	<table border="1"> 
		<thead>
			<tr>
				<th>Nome da flor</th>
				<th>Preço da flor</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM flor';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['nome'].'</td>';
					echo '<td>'. $row['preco'].'</td>';
					echo '<td>';
						echo '<a href="detailsFlor.php?id='.$row['id'].'" >Detalhes | </a>';
						echo '<a href="editFlor.php?id='.$row['id'].'">Editar | </a>';
						echo '<a href="removeFlor.php?id='.$row['id'].'">Remover | </a>';
					echo '</td>';
				echo '</tr> ';

			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>