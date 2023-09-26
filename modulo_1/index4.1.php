<DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
     	<title>Aprendendo PHP</title>
     </head>

     <body>

     	<!--Abaixo algumas formatações de texto-->

     	<p>Este é um Parágrafo em <i>itálico</i></p>
     	<p>Este é outro Parágrafo em <b>bold</b></p>

     	<!--Abaixo irns de uma lista não ordenada-->

     	<ul>
             <p><b>Lista de Links</b></p>
     		
               <li><a href="index1.php">Aula 1 </a></li>
               <li><a href="index2.php">Aula 2</a></li>
               <li><a href="index3.php">Aula 3 </a></li>
               <li><a href="index4.php"> Aula 4</a></li>

     	</ul>

     	<ol >

               <p><b>Lista de Frutas</b></p>
     		<li>Abacate</li>
     		<li>Banana</li>
     		<li>Melância</li>
               <li>Laranja</li>
               <li>Maçã</li>
               <li>Morango</li>
     	</ol>


     	<p><a href="index3.php">Este link vai para o index3.php</a></p>	


          <p> Formulário para preecher. Esse formulário envia valores para a barra de endereços.</p>


          <form>
               Nome  :<input name="nome"/><!--input atributo name-->
          </br>
               Nota 1:<input name="nota1"/>
          </br>
               Nota 2:<input name="nota2"/>
          </br>

          <p><button>Enviar</button></p>

          </form>


          <p> Mudadndo alguns atributos da tabela</p>


          <table bgcolor=lightgray border=1 bordercolor=gray>
               <tr  >
                    <td ><b>Nome do Aluno</b></td>
                    <td ><b>Nota 1</b></td>
                    <td><b>Nota 2</b></td>
                    <td><b>Aprovado</b></td>

               </tr >

               <tr bgcolor=white>
                    <td>Liza</td>
                    <td>10</td>
                    <td>10</td>
                    <td>Sim</td>

               </tr >

               <tr bgcolor=white>
                    <td>João </td>
                    <td>8</td>
                    <td>7</td>
                    <td>Sim</td>

               </tr >
               <tr bgcolor=white>
                    <td>Maria</td>
                    <td>10</td>
                    <td>10</td>
                    <td>Sim</td>

               </tr >

               <tr bgcolor=white>
                    <td>Luiz</td>
                    <td>7</td>
                    <td>10</td>
                    <td>Sim</td>

               </tr >

               <tr bgcolor=white>
                    <td>Karina</td>
                    <td>10</td>
                    <td>9</td>
                    <td>Sim</td>

               </tr >







           </table>    

       

     </body>
     <p><a href="index.php">Menu</a></p>


</html>
