<?php
abstract class Conexao{
    private $servidor = 'localhost';
    private $user = 'matheusmq';
    private $pass = 'OTM4MmQzMDIxMTYxNzQyOGFjZWQ5OWRi';
    private $banco = 'site_matheusmq';
    protected $conn;
            
    protected function conexao(){
        $this->conn = new PDO('mysql:host=' . $this->servidor . ';dbname=' . $this->banco, $this->user, $this->pass);
    }
}
?>