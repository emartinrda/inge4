<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="procesar.php" method="POST">
		
		<label for="">Usuario:</label><br>
		<input id="id_usuario" type="text" name="usuario"'>
		<br><br>
		<label for="">Password:</label><br>
		<input id="id_password" type="password" name="password"><br><br>
		<button onclick="validar_usuario(event)">Entrar</button>
	</form>

<script>

function validar_usuario(event){
	var usuario = document.getElementById('id_usuario');
	var password = document.getElementById('id_password');

	if (usuario.value.trim() == "" || password.value.trim() == "" ){
		event.preventDefault();
		alert("campos vacios!");
	}
}	
</script>
</body>
</html>