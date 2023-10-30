<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Aprendendo PHP</title>
    </head>
      <body>
          <h2><b>Módulo 4</b></h2>
          <h3><b>Aula 6 - Isolando uma camada Model e criando o Controller</b></h3>

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
                      <td>Remover</td>
                    </tr>

                <?php } ?>             


          </table>          
         
          
      </body>
</html>
      
    	






