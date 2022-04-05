<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<label>Jumlah List : </label><br>
			<input type="text" name="jumlah"><br>
			<button type="submit" name="submit">Submit</button>
		</form>
		<?php
			if(isset($_POST["submit"])){
				echo "<h1>Jumlah List:</h1><br>";
				$i = 1;
				echo "<ul>";
				while($i <= $_POST["jumlah"]){
					echo "<li> $i </li>";
					$i ++;
				}
				echo "</ul>";
			}
		?>	
</form>
	</body>
</html>