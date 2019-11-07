 
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form action="" method="post">
			<label>Col:</label><input type="text" name="colonne"><br>
			<label>Ligne: </label><input type="text" name="ligne"><br>
			<input type="submit" value="VALIDER" name="valider">
		</form>
	
	<?php 
		if(isset($_POST['valider'])){
			if(isset($_POST['colonne']) && isset($_POST['ligne'])){
				$colonne=$_POST['colonne'];
				$ligne=$_POST['ligne'];

				$classe = "noire";
				?>
				<table>
					<?php 
					for ($i=0; $i < $ligne; $i++) {
						echo "<tr>"; 
						for ($j=0; $j < $colonne ; $j++) { 
							if(($i+$j)%2==0){
								echo '<td class="'.$classe.'">#</td>';
							}else{
								echo '<td>*</td>';
							}
						}
						echo "</tr>";
					}
					 ?>
				</table>
				<?php
			}
		}
	?>

</body>
</html>