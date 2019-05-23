<?php include '../complemento/header.php'; ?>

<body>
	<?php include '../complemento/nav.php'; ?>
	<div class="container p-4">
		<form method="post" action="./function/pagar.php">
			<div class="col-md-6">
				
					<select class="browser-default custom-select">
						  <option selected>Seleccione una opcion</option>
						  <option value="1" name="pagoLuz">Luz</option>
						  <option value="2" name="pagoAgua">Agua</option>
						  <option value="3" name="pagoInternet">internet</option>
					</select>
				
			</div>
			<div class="col-md-6">
				<div class="form-group">
	    			<label for="formGroupInputPago">Monto a pagar</label>
	    			<input type="text" name="valorCuota" class="form-control" id="formGroupInputPago" placeholder="Ingrese el monto que desea pagar">
	  			</div>
			</div>
			<button type="submit" class="btn btn-primary">Pagar</button>
		</form>
		<div class="container p-4">
			<h5>Valores Pagados</h5>
		</div>
<?php 	
	$db = "prueba";
	$host="localhost";
	$ps="";
	$usuario = "root";
	$con = new mysqli($host, $usuario, $ps,$db) or die('no se puede conectar con la base de datos');
	$sql = "SELECT * FROM pagos";
	$result = $con->query($sql);
	echo "<table class=table>";
	while($rows=mysqli_fetch_row($result)){
		echo  "<thead>";
			echo "<tr>";
				echo "<th scope=col>Valor a Pagado</th>";
				echo "<th scope=col>Valor Pagado</th>";
				echo "<th scope=col>Rut Cliente</th>";
   			echo "</tr>";
  		echo"</thead>";
  		echo"<tbody>";
		   	echo "<tr>";
		   	
		     	echo "<td>".$rows[1]."</td>";
		      	echo"<td>".$rows[2]."</td>";
		      	echo"<td>".$rows[3]."</td>";
		      
			echo"</tr>";
	   	echo"</tbody>";
	   }
    echo"</table>";

	while($rows=mysqli_fetch_row($result)){

	echo 'id: '.$rows[0]."</br>"; 
	echo 'valor: '.$rows[1]."</br>"; 
}
?>

	</div>
</body>



<?php include '../complemento/footer.php'; ?>