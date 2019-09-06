<?php
  if(isset($_POST["enviar"])) {
    if(isset($_POST['palabra']) ){
      if(ctype_alpha($_POST["palabra"]) && strlen($_POST["palabra"]) > 3 && strlen($_POST["palabra"]) < 25 ){
        session_start();

        $_SESSION['oportunidades']=6;
        $_SESSION["vector_palabra"]=str_split($_POST['palabra']);
        $random = rand(1,count($_SESSION["vector_palabra"]));

        for ($i=0; $i < count($_SESSION["vector_palabra"]); $i++) {
          $boolean=($i == $random || $i+1 == count($_SESSION["vector_palabra"]));
          $_SESSION["palabra_a_llenar"][$i]= $boolean? $_SESSION["vector_palabra"][$i]:"?";
          }

        header("Location:ahorcado.php");
        exit;
      }else {
        $error_palabra=true;
      }
    }
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>AHORCADO</title>
   </head>
   <body>
     <header>
       <div class="">
          <h1 style="text-align:center;">Ahorcado</h1>
       </div>

         <div class="" style="text-align:center;">
           <form class="" action="" method="post">
            <label for="Palabra">Ingrese la palabra</label><br>
            <input type="password" name="palabra"><br><br>
            <?php if ($error_palabra): ?>
              La palabra debe ser de caracter sencillo y de entre 3 y 25 caracteres. <br><br>
            <?php endif; ?>
            <input type="submit" name="enviar" value="Ingresar"><br>

           </form>
         </div>

     </header>
   </body>
 </html>
