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
	$lname = trim($_POST["lname"]);
	$email = trim($_POST["email"]);
	$phone = trim($_POST["phone"]);
	$zip = trim($_POST["zip"]);
	$gender = trim($_POST["gender"]);
	$dia = trim($_POST["dia"]);
	$mes = trim($_POST["mes"]);
	$year = trim($_POST["year"]);
	$colegio = trim($_POST["colegio"]);

	
	if ($name == "" ||	$lname == "" ||	$email == "" ||	$phone == "" ||	$zip == "" ||	$gender == "" ||	$dia == "" ||	$mes == "" ||	$year == "" ||	$colegio == "" ) {
		echo "Todos los campos son requeridos";
	} else {
		$sql = "INSERT INTO mensajes (name,lname,email,phone,zip,gender,dia,mes,year,colegio) VALUES ('$name','$lname','$email','$phone','$zip','$gender','$dia','$mes','$year','$colegio')";
		$resultado = array();

		if ($conn->query($sql) === TRUE) {
			 echo "El mensaje ha sido enviado y almacenado en la base de datos";
			 $resultado["exito"] = true;
			//$resp = "OK";
		} else {
			echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde";
			$resultado["exito"] = false;
		}
			echo json_encode($resultado);

	}
}

$conn->close();
?>
