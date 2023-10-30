<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Aprendendo PHP</title>
    </head>
      <body>
          <h2><b>Módulo 4</b></h2>
          <h3><b> Aula 8 - Implementando consulta e edição</b></h3>

          <form>
                <input type="hidden" name="id" value="<?=$id?>" size=15 >
                <br/>
                Nome: <input name="nome" value="<?=$nome?>" >
                <br/>
                Nota: <input name="nota" value="<?=$nota?>" >
                <br/>             
                <p><button name=acao value="<?=$acao?>"><?=$acao?></button></p>               
            
          </form>

          <table border="1">
            
              <tr>
                <th style="background-color:lightgray;padding: 4px 6px;">Id</td>
                 <th style="background-color:lightgray;">Nome</th>
                 <th style="background-color:lightgray;">Nota</th>
                 <th style="background-color:lightgray;" colspan="2">Ação</th>
              </tr>

                <?php foreach($dados as $cadastro)
                 
                {?>

                    <tr>
                      <td><?=$cadastro['id']?></td>
                      <td><?=$cadastro['nome']?></td>
                      <td><?=$cadastro['nota']?></td>
                      <td><a href="?acao=Remover&id=<?=$cadastro['id']?>">Remover</a></td>
                      <td><a href="?acao=Consultar&id=<?=$cadastro['id']?>">Consultar</a></td>
                    </tr>


                     

                <?php }?>             


          </table>          
         
          
      </body>
</html>
      
    	






