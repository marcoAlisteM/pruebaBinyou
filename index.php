<?php include './complemento/header.php';  ?>
<body> 
  <div class="container p-4">
    <div class="card">
      <div class="card-header">
        Inicio de Session
      </div>
      <div class="card-body">
        <h5 class="card-title">Login</h5>
         <div class="form-group">
        	<label for="inputLblRut">Rut</label>
        	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ingrese Rut">
      	  </div>
    	  <div class="form-group">
    	    <label for="exampleInputPassword1">Password</label>
    	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
    	  </div>
          <a href="./pages/home.php" class="btn btn-primary">Iniciar</a>
      </div>
    </div>
  </div>
</body> 

<?php include './complemento/footer.php'; ?>