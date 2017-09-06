<?php
$curso = $_GET['curso']; 
if ($curso == '1') {
   $cursot = 'Gastronomia';
}elseif ($curso =='2') {
  $cursot = 'Enfermagem';
}elseif ($curso == '3') {
  $cursot = 'Farmácia';
}elseif ($curso == '4') {
  $cursot= 'Desenvolvimento de Software';
}elseif ($curso == '5') {
  $cursot = 'Administração';
}
$name = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/cadastro.css" rel="stylesheet">
  </head>

  <body>

   

    <div class="container">

      <div class="starter-template">
        <h1 class="centered">Parabéns <?php echo $name ?> sua inscrição para o curso de <?php echo $cursot ?> foi realizada com sucesso</h1>
      
      </div>

    </div>


  </body>
</html>
