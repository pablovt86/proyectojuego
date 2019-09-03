<?php



 ?>
 <!doctype html>
 	<html>
 		<head>
 		    <title>sistema de login</title>
 		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 			<!-- vinculo a bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <!-- Temas-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->
 <link rel="stylesheet" type="text/css" href="css/styles.css">
   <link rel = " stylesheet "  href = " https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css " >
 		</head>




     <header class="inicio">
 <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
 <a class="navbar-brand" href="#">
 <img src="images/dectective.jpg" alt="Logo" style="width:40px;">
 </a>
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
 <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" href="#">Link</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#">Link</a>
     </li>
     <li class="nav-item">
       <a class="nav-link disabled" href="#">Disabled</a>
     </li>
   </ul>
 </nav>
 </header>
 		<body>


 		 <div id="Contenedor">
 		 <div class=" Icon">
                     <!--Icono de usuario-->
                    <span class="glyphicon glyphicon-user"></span>
                  </div>
 <div class=" ContentForm">
 		 	<form action="" method="post" name="FormEntrar">
 		 		<div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
 				  <input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
 				</div>
 				<br>
 				<div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
 				  <input type="password" name="contra" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
 				</div>
 				<br>
 				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
 				<div class="opcioncontra"><a href="">Olvidaste tu contraseña?</a></div>
 		 	</form>
 		 </div>
 		 </div>
 </body>
  <!-- vinculando a libreria Jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Libreria java scritp de bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </html>
