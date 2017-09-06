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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Cadastro</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/cadastro.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
    <h2 class="form-signin-heading">Curso de <?php echo $cursot ?></h2>
      <form class="form-signin" method="post" action="product/create.php">
        <h2 class="form-signin-heading">Cadastro</h2>

        
        <input type="text" id="name" class="form-control" placeholder="Nome Completo (Obrigatório)" name="name">
        <input type="text" id="email" class="form-control" placeholder="E-Mail (Obrigatório)" name="email">
        <input type="text" id="nascimento" class="form-control" name="nascimento" placeholder="Data de Nascimento (Obrigatório)" onfocus="(this.type='date')">     
        <input type="text" id="telefone" class="form-control" placeholder="Telefone (Opcional)" name="telefone"></br>
        <input type="hidden" name="curso" id="curso" value="<?php print $curso ?>" />
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="create">Confirmar Inscrição</button>
      </form>

  <?php

    if (isset($_GET['erro']))
      $erro = $_GET['erro'];
    else
      $erro = null;
    if ($erro == '1') {
      echo "  <p align='center'><FONT COLOR='red'>Por favor preencha todos os dados obrigatórios</FONT></p>";
    }
    elseif ($erro == '2') {
      echo "  <p align='center'><FONT COLOR='red'>Você deve ser maior de 18 anos para se inscrever</FONT></p>";
    }
  ?>
    </div> 


  </body>
</html>
