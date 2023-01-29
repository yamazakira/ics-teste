<?php      
       include('connection.php');      
?>  
<body>
	<h1 class="page-header">
		Flor e Cultura <small> - PHP CRUD ICS 2022 </small>
	</h1>

	<h2>Adicionar nova flor</h2>
	<br/>
	<form method="post" action="add_postFlor.php">
                            
		<input placeholder="Nome da Flor" name="nome"><br/><br/>
		<input placeholder="Preço" name="preco"><br/><br/>
		<br/><br/>
		<button type="submit" class="btn btn-success">Salvar nova flor</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar campos</button>&nbsp;
		<a class="btn btn-info" href="indexFlor.php">Voltar à lista</a>

	</form>  
</body>

</html>