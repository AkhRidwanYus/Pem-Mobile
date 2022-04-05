<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="POST">
			<label>Username: </label><br>
			<input type="text" name="user" value="<?=isset($_POST["user"]) ? $_POST["user"] : ''?>"><br>
			<label>password: </label><br>
			<input type="password" name="pass"><br>
			<button type="submit" name="submit">Submit</button>
		</form>
		<?php
			if(isset($_POST["submit"])){
				if(($_POST["user"] == "admin") and ($_POST["pass"] == "admin")){
					echo "<h1>Selamat Datang Admin</h1>";
				}
				else{
					echo "<h1>Username atau Password yang anda masukkan salah!!!</h1>";
				}
			}	
		?>
	</body>
</html>
