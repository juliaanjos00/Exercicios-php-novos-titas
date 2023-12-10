<!DOCTYPE html>
<html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/Exercicio-8/style.css">
      <title>Exercicio-8</title>
  </head>
       <body>
             <div class="form">
             <div class="title">  Exercício 8 </div>
                <h3 id="text">Criar um algoritmos que leia um número e
                               imprima todos os número de 1 até ele e o seu
                                produto.
                </h3>

                <form id="form" action="/Exercicio-8/index.php" method="post">
                  <div class="input-field"></div>
                  <label for="number" class="sub">Escolha um número:</label>
                  <input type="number" class="input" name="value" id="value" placeholder="Escolha um valor..."/>
                  <div class="underline"></div>
                  <input type="submit" class="button" name="enviar" value="Enviar"/> 
                </form>

                <?php
                  if (array_key_exists ('value', $_POST)) {
                    $value= $_POST['value'];
                     $numero = 1;
                     echo "<h3> De 1 até $value:</h3>";
                     for ($i = 1; $i <= $value; $i++) {
                         echo "<li>$i</li>";
                         $numero*= $i;
                      }
                  }
                 ?>
             
             </div> 
       </body>  
</html>                 