<!--funções
<?php

    function recebe($param){
      if(existe($param))
        return $_GET[$param];
    return "";
    }

    function existe($param){
      return isset($_GET[$param]);
    }

    function testar($param,$vlr){
      if(!existe($param)) return false;
       return recebe($param) == $vlr;
    }

?>
<!--controller
<?php  
     

    function clientes(){

        
        $model= new Model();
        

        if (recebe("acao") == ("cadastro")){
        $model->inserirClientes(recebe("nome"),recebe("email"));       
        $acao='cadastro';

        }else if(testar('acao','remover')){
        $model->excluir(recebe("id"));

        }else if(testar('acao','editar')){
        $model->editarClientes(recebe('id'),recebe('nome'),recebe('email'));
        $acao='editar'; 

        }else if(testar('acao','consultar')){       
        $base=$model->selectId(recebe('id'));
        $id=$base[0]['id'];
        $nome=$base[0]['nome'];
        $email=$base[0]['email'];
        $acao='editar';
        }     
       
        $dados = $model->listarClientes();
    	render("cliente.php",$dados);
    }

        
    function produtos(){

    	$model= new Model();
        if (recebe("acao") == ("cadastro")){
        $model->inserirProdutos(recebe("nome"),recebe("valor"));
        }
        
        $dados = $model->listarProdutos();
        render("produto.php",$dados);	      
    }


    function render($template,$dados){
          $arrayCadastro=$dados;
          include $template;
    }
  
?>    
<!--model
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

        public function inserirProdutos($nome,$valor){
            $sql="INSERT INTO produtos(nome, valor) VALUES (:nome,:valor)";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':nome'=>$nome,':valor'=>$valor]);
             
        } 


        public function listarClientes(){
            $sql = "SELECT id,nome,email FROM clientes";
            $consulta=$this->pdo->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }

        public function selectId($id){            
            $sql = "SELECT id,nome,email FROM clientes WHERE id=:id";
            $consulta=$this->pdo->query($sql);
            $consulta->execute([':id'=>$id]); 
            $base=$consulta->fetchAll(PDO::FETCH_ASSOC);
            return $base;
            

                    
        } 

        public function inserirClientes($nome,$email){
            $sql="INSERT INTO clientes(nome, email) VALUES (:nome,:email)";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':nome'=>$nome,':email'=>$email]);
        } 

        public function editarClientes($id,$nome,$email){
            $sql="UPDATE clientes SET nome=:nome, email=:email WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id,':nome'=>$nome,':email'=>$email]);
            
             error_log("Função selectId() chamada com ID: $id");
        } 

        public function excluir($id){           
            $sql="DELETE FROM clientes WHERE id=:id";
            $consulta=$this->pdo->prepare($sql);
            $consulta->execute([':id'=>$id]); 
        }                      

        public function __destruct(){
        	$this->pdo=null;
        }

    }


?>
<!--cliente -->
    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Loja </h2>
        </p>
        <h2 class="h2">Cadastro de Clientes</h2>

        <form action="cliente.php" method="post">
            <div class="bloco_form">
            <input type="hidden" name="id" value="<?= $cadastro['id'] ?>">
            </div>
            <div class="bloco_form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?= $cadastro['nome'] ?>">
            </div>
            <div class="bloco_form">
            <label for="email">E-mail</label>
            <input type="text" name="email" value="<?= $cadastro['email'] ?>">
            </div>
            <button name="acao" value="<?=$acao?><?=$acao?>">Cadastrar</button>
        </form>


        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th colspan=3>Edição</th>
            </tr>

    <?php 

        
    foreach ($arrayCadastro as $cadastro){ ?>         
            
            <tr>
                <td><?=$cadastro['id']?></td>
                <td><?=$cadastro['nome']?></td>
                <td><?=$cadastro['email']?></td>
            <form action="cliente.php" method="post">
                <td>
            <button type="submit" name="acao" value="remover">Remover<input type="hidden" name="id" value="<?= $cadastro['id'] ?>"></button>
                </td>
                <td>
            <button type="button" name="acao" value="consultar">Consultar<input type="hidden" name="id" value="<?= $cadastro['id'] ?>"></button>
                </td>            
            </form>
                </tr>

    <?php }?>

    </table>

    </div>



</body>

</html>