<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Aprendendo PHP</title>
    </head>
      <body>
          <h2><b>Módulo 4</b></h2>
          <h3><b> Aula 7 - Implementando Inserção e exclusão de dados</b></h3>

          <form>

                Nome: <input name="nome" size=15>
                <br/>
                Nota: <input name="nota" size=16>
                <br/>               
                <p><button>Cadastrar</button></p>               
            
          </form>

          <table border="1">
            
              <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Nota</td>
                <td>Ação</td>
              </tr>

                <?php foreach($arraycadastro as $cadastro){?>

                    <tr>
                      <td><?=$cadastro['id']?></td>
                      <td><?=$cadastro['nome']?></td>
                      <td><?=$cadastro['nota']?></td>
                      <td><a href="desafio.php?acao=remover&id=<?=$cadastro['id']?>">Remover</a></td>
                    </tr>

                <?php } ?>             


          </table>          
         
          
      </body>
</html>
      
    	






