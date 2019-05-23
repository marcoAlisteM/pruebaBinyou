<?php include '../complemento/header.php'; ?>

<body>
<?php include '../complemento/nav.php'; ?>
<div class="container p-3">
	<h1>Bienvenido a Bimyou</h1>
<?php
$apiUrl = 'https://mindicador.cl/api';
//Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
		if ( ini_get('allow_url_fopen') ) {
		    $json = file_get_contents($apiUrl);
		} else {
		    //De otra forma utilizamos cURL
		    $curl = curl_init($apiUrl);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		    $json = curl_exec($curl);
		    curl_close($curl);
		}
		$dailyIndicators = json_decode($json);
		echo '<div class="card">';
			echo '<div class="card-header">';
				echo '<h5 class="text-center">Valores de monedas</h5>';
			echo '</div>';
			echo '<div class="card-body">';
				echo '<p>El valor actual de la UF es $' . $dailyIndicators->uf->valor.'</p>';
				echo '<p>El valor actual del Dólar observado es $' . $dailyIndicators->dolar->valor.'</p>';
				echo '<p>El valor actual del Dólar acuerdo es $' . $dailyIndicators->dolar_intercambio->valor.'</p>';
				echo '<p>El valor actual del Euro es $' . $dailyIndicators->euro->valor.'</p>';
				echo '<p>El valor actual del IPC es ' . $dailyIndicators->ipc->valor.'</p>';
				echo '<p>El valor actual de la UTM es $' . $dailyIndicators->utm->valor.'</p>';
				echo '<p>El valor actual del IVP es $' . $dailyIndicators->ivp->valor.'</p>';
				echo 'El valor actual del Imacec es ' . $dailyIndicators->imacec->valor.'</p>';
			echo '</div>';
		echo '</div>';
?>
</div>
</body>


<?php include '../complemento/footer.php'; ?>