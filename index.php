<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>GESTOR DE CURSOS EN LINEA</title>
	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/jimena.css">
</head>
<body  background="./imagenes/logg.jpg">
  <nav >
		<div class="container">
        <div class="col-xs-12">
          <?php
            if(isset($_GET["status"])){
              if($_GET["status"] === "1"){
                ?>
                <div class="alert alert-danger">
                    <strong>Accesos Incorrectos</strong>
                    <p> Verifica tus accesos e intenta nuevamente </p>
                  </div>
                <?php
              }
              if($_GET["status"] === "2"){
                ?>
                <div class="alert alert-info">
                    <strong>Se ha cerrado la sesión correctamente</strong>
                  </div>
                <?php
              }
            }
            else {
                ?>
                  <div class="alert alert-success">
                    <strong>¡Bienvenido!</strong>
                  </div>
                <?php
              }
          ?>
     
      		<h1> Hola, Bienvenido al sistema </h1>

      		<br>
          <div class="col-xs-12">
           <h3>Por favor inicie sesión</h3>
           <form method="post" action="login.php">
             <label for="usuario">Usuario:</label>
             <input class="form-control" required id="usuario" name="usuario" placeholder="Nombre del usuario" type="text">
             <label for="pass">Contraseña:</label>
             <input class="form-control" required id="pass" name="pass" placeholder="contraseña" type="password" >
             <input class="btn btn-info" type="submit" value="Iniciar">
           </form>
          </div>
        </br>
  		</div>
    </div>
  </nav>
  </body>
</html>
