<?php 	
$valorCuota = $_POST['valorCuota'];
$db = "prueba";
$host="localhost";
$ps="";
$usuario = "root";
$con = new mysqli($host, $usuario, $ps,$db) or die('no se puede conectar con la base de datos');
$sql = "INSERT INTO pagos(valorCuota, valorPagado, id_cliente) VALUES ($valorCuota, $valorCuota, 111111111)";
$result = $con->query($sql);
echo "¡Gracias! Hemos recibido sus datos.\n";
header('Location: /prueba/pages/pago.php');

 ?>