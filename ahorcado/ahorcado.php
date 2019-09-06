<?php
  session_start();

  function imprime_palabra($vector){
    foreach ($vector as $valor) {
      echo $valor . " ";
    }

  }
  $contador=0;

 if (isset($_POST["enviar"])) {
   if (isset($_POST["letra"])) {
     if(ctype_alpha($_POST["letra"]) && strlen($_POST["letra"])==1){

       for ($i=0; $i < count($_SESSION["vector_palabra"]) ; $i++) {

          if(strcmp($_POST["letra"], $_SESSION["vector_palabra"][$i]) == 0){

                $_SESSION["palabra_a_llenar"][$i]=$_POST["letra"];

                $contador=$contador+1;
            }
        }
        if($contador==0){
          $_SESSION["oportunidades"]=$_SESSION["oportunidades"]-1;
        }
      }else {
        $error_letra=true;
      }


    }
  }//IF DE SUBMIT

    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AHORCADO</title>
  </head>
  <body>

<?php if (strcmp(implode($_SESSION["palabra_a_llenar"]),implode($_SESSION["vector_palabra"])) != 0){ ?>

    <?php if($_SESSION["oportunidades"]>0): ?>

    <div class="">
       <h1 style="text-align:center;">Ahorcado</h1>
    </div>

    <div class="" style="text-align:center;">
      <form class="" action="" method="post">
        <label for="letra">Ingrese la letra</label><br>
        <input type="text" name="letra"><br><br>
        <?php if ($error_letra): ?>
          El caracter debe ser unico y sencillo. <br><br>
        <?php endif; ?>
        <input type="submit" name="enviar" value="Ingresar">
        <br><br>
      </form>
    </div>

  <?php endif; ?>

  <?php
    if (isset($_POST["enviar"])){
        if ($contador > 0){
          imprime_palabra($_SESSION["palabra_a_llenar"]);
          echo "<br><br>Hubo coincidencia!";
        }else{
          imprime_palabra($_SESSION["palabra_a_llenar"]);
          echo "<br><br>No hubo coincidencia! Oportunidades: " . $_SESSION["oportunidades"];
      }
    }else{
      imprime_palabra($_SESSION["palabra_a_llenar"]);
    }
    ?>

  <?php if ($_SESSION['oportunidades']==0): ?>

    <div class="">
      Perdiste tus oportunidades, te ahorcaron. <a href="pruebas_integrador.php">Volver a jugar</a>
    </div>

    <?php session_destroy()?>

    <?php endif; ?>

  <?php }else{?>
    <div class="">
        <h3>GANASTE! la palabra es: <?php echo "[" . implode($_SESSION["palabra_a_llenar"]) . "]";?> </h3> <a href="pruebas_integrador.php">Volver a jugar</a>
    </div>
    <?php session_destroy(); ?>
  <?php }  ?>

  </body>
</html>
