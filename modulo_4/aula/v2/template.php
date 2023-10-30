<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Aprendendo PHP</title>
    </head>
      <body>
          <h2><b>Módulo 4</b></h2>
          <h3><b>Aula 3 - Passando dados para um template</b></h3>

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

                <tr>
                  <td><?=$id?></td>
                  <td><?=$nome?></td>
                  <td><?=$nota?></td>
                  <td>Remover</td>
                </tr>


          </table>  	   
       
          
         
          
      </body>
</html>
      
    	






