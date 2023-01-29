<html>
	<?php
	include('connection.php');
	?>  

	<body>

	<?php

	$querybuque = 'DELETE FROM buque WHERE flor_id = '.$_GET['id'];
	$resultbuque = mysqli_query($db, $querybuque) or die(mysqli_error($db));

	$query = 'DELETE FROM flor WHERE id = '.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
						
	?>
		
	<script type="text/javascript">
		alert("Successfully Deleted.");
		window.location = "indexFlor.php";
	</script>				
				
	</body>
</html>