<?php
$servername = "localhost";
$username = "vpromo_bosque1";
$password = "IdElMZ645P15";
$dbname = "vpromo_realbosque";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
	die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if ($name == "" || $email == "" || $message == "") {
		echo "Todos los campos son requeridos";
	} else {
		$sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$name', '$email', '$message')";

		if ($conn->query($sql) === TRUE) {
			echo "El mensaje ha sido enviado y almacenado en la base de datos";
		} else {
			echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde";
		}
	}
}

$conn->close();
?>
