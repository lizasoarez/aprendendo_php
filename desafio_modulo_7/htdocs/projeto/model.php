<?php

    class Model{

    	private $pdo;

    	public function __construct(){

            $host="localhost";
            $usr="usuario";
            $psw="senhadousuario";
            $bd="loja";
            $porta="3307";

        try{

        	$this->pdo = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$usr,$psw);

        }catch (PDOException $e){

        	die("Erro de conexão com o banco de dados:".$e->getMessage());
            }
        }
          
         

        public function listarProdutos(){
            $sql="SELECT * FROM produtos";
            $consulta=$this->pdo->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }
        public function listarProdutosId($id){
            $sql="SELECT id,nome,valor FROM produtos WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id]);            
            $base=$consulta->fetchAll(PDO::FETCH_ASSOC);
            return $base;
        }

        public function inserirProdutos($nome,$valor){
            $sql="INSERT INTO produtos(nome, valor) VALUES (:nome,:valor)";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':nome'=>$nome,':valor'=>$valor]);
        }

       
         public function atualizaProdutos($id,$nome,$valor){
            $sql="UPDATE produtos SET nome=:nome, valor=:valor WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id,':nome'=>$nome,':valor'=>$valor]);
        }

        public function excluirProdutos($id){           
            $sql="DELETE FROM produtos WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id]); 
        }  
        
//------------------------------------------------------------------------------------
                            //CLIENTES//
// -----------------------------------------------------------------------------------        
        public function listarClientes(){
            $sql="SELECT * FROM clientes";
            $consulta=$this->pdo->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC); 
        }

         public function listarClientesId($id){
            $sql="SELECT id,nome,email FROM clientes WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id]);            
            $base=$consulta->fetchAll(PDO::FETCH_ASSOC);
            return $base;

        }

        public function inserirClientes($nome,$email){
            $sql="INSERT INTO clientes(nome, email) VALUES (:nome,:email)";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':nome'=>$nome,':email'=>$email]);

        } 

        public function atualizaClientes($id,$nome,$email){
            $sql="UPDATE clientes SET nome=:nome, email=:email WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id,':nome'=>$nome,':email'=>$email]);
        }

        public function excluirCliente($id){           
            $sql="DELETE FROM clientes WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id]);            
                    
        }                      
        

        public function __destruct(){
        	$this->pdo=null;
        }
        

    }
    


?>