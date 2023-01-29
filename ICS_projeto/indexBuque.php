<?php
       include('connection.php');
?>
<body>

	<h1>
		Flor e Cultura <small> - PHP CRUD ICS 2022 </small>
	</h1>
	
	<h2>Listagem de buques</h2>
	<br/>
	<a href="addBuque.php">Adicionar novo buquê |</a>
	<a href="indexFlor.php"> Listagem de flores</a>
	<br/><br/>
	<table border="1"> 
		<thead>
			<tr>
				<th>Nome do Buque</th>
				<th>Preço do Buque</th>
				<th>Flor</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM buque';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {   
				echo '<tr>';

					$id = $row['flor_id'];

					$resultflor = mysqli_query($db,"SELECT nome FROM flor WHERE id = '$id'");
					$rowflor = mysqli_fetch_assoc($resultflor);

					echo '<td>'. $row['nome'].'</td>';
					echo '<td>'. $row['preco'].'</td>';
					echo '<td>'. $rowflor['nome'].'</td>';
					echo '<td>';
						echo '<a href="detailsBuque.php?id='.$row['id'].'" >Detalhes | </a>';
						echo '<a href="editBuque.php?id='.$row['id'].'">Editar | </a>';
						echo '<a href="removeBuque.php?id='.$row['id'].'">Remover | </a>';
					echo '</td>';
				echo '</tr> ';

			}
			?> 
                                    
		</tbody>
	</table>

</body>

</html>