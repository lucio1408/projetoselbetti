<?php
class Alunos{
 
    // conexão da db
    private $conn;
    private $table_name = "alunos";
 
    // propriedades do objeto
    public $id;
    public $name;
    public $email;
    public $nascimento;
    public $telefone;
    public $category_id;
 
    // constructor db
    public function __construct($db){
        $this->conn = $db;
    }




// cria alunos
function create(){
 
    // query insert 
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                name=:name, email=:email, nascimento=:nascimento,telefone=:telefone, category_id=:category_id";
 
    // preparar query
    $stmt = $this->conn->prepare($query);
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->nascimento=htmlspecialchars(strip_tags($this->nascimento));
    $this->telefone=htmlspecialchars(strip_tags($this->telefone));
    $this->category_id=htmlspecialchars(strip_tags($this->category_id));
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":nascimento", $this->nascimento);
    $stmt->bindParam(":telefone", $this->telefone);
    $stmt->bindParam(":category_id", $this->category_id);
 
    // executa query
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }
}




}