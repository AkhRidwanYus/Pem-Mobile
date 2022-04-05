<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			td {border: 1px solid;}
			.smol {
				width: 50px;
				height: 50px;
			}
			.med {
				width: 100px;
				height: 100px;
			}
			.lar {
				width: 150px;
				height: 150px;
			}
		</style>
	</head>
	<body>
		<form action="" method="POST">
			<label>Pilih Ukuran: </label><br>
			<select name="ukuran">
				<option value="kecil">Kecil</option>
				<option value="sedang">Sedang</option>
				<option value="besar">Besar</option>
			</select>
			<button type="submit" name="submit">Submit</button>
		</form>
		<?php
			if(isset($_POST["submit"])){
				if(isset($_POST["ukuran"])){
					echo "<table><tr>";
					switch($_POST["ukuran"]){
						case "kecil":
							echo"<td class=\"smol\"></td>";
							break;
						case "sedang":
							echo"<td class=\"med\"></td>";
							break;
						case "besar":
							echo"<td class=\"lar\"></td>";
							break;
						default:
							break;
					}
					echo "</tr></table>";
				}
			}	
		?>
	</body>
</html>
