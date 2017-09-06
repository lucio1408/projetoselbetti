<?php
// headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// conexoes db
include_once '../config/database.php';
 
// instancia objeto
include_once '../objects/alunos.php';
 


    $nome = $_POST['name'];    
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $curso = $_POST['curso'];
    $datan = $_POST['nascimento']; 
    $data = date('Y');
   	$idade = $data-$datan;


    $error=true;
    if( $nome !== '' && $email !== '' && $nascimento !== '' ){
        $error=false;
    } 
    
    if($error === true ){
        header('Location: http://lucioprojeto.azurewebsites.net/api/cadastro.php?erro=1&curso='.$curso); 

    } elseif ($idade < 18 ) {
    	header('Location: http://lucioprojeto.azurewebsites.net/api/cadastro.php?erro=2&curso='.$curso); 
    }else {
        $database = new Database();
        $db = $database->getConnection();
        $product = new Alunos($db);
        $product->name = $_POST['name'];
        $product->email = $_POST['email'];
        $product->nascimento = $_POST['nascimento'];
        $product->telefone = $_POST['telefone'];
        $product->category_id = $_POST['curso'];
        header('Location: http://lucioprojeto.azurewebsites.net/api/confirmation.php?name='.$nome.'&curso='.$curso);  
        $product->create();
    }        
?>