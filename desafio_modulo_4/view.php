<!DOCTYPE html>
<html lang="pt">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title> 
        <style>

        .titulo_modulo{
            line-height: 0.3;
            color: #fff;
            padding: 10px;
            margin-top: -3px;
            margin-left: -11px;
            margin-bottom: 18px;
            background-color: #04aa6d;
            width: 250px;            
            border-radius: 0px 20px 20px 0px;
            box-shadow: -1px -2px 6px gray;
        }


        body {
            font-family: Arial, sans-serif;
            font-size:14px}

        .bloco_body {            
            max-width: 600px;
            padding: 60px;
            box-shadow:1px 7px 9px 1px lightgray;}

         .bloco_body .h2_a {
            color: #04aa6d;
            margin-top: -37px;
            font-size: 30px;
            text-shadow: 1px 4px 3px #008b5830;}
        
        .bloco_body .h2 {
            color: #000000cf;
            font-size: 20px;
            margin-top: -26px;}

        .bloco_form {
            margin-bottom: 20px;}

        label {
            
            color: #303030;
            font-weight: bold;}

        input[type="text"]{
            display: block;
            width: 70%;
            padding: 5px;
            border: 1px solid #ccc;}

        button {
         
            font-size: 14px;         
            background-color: #04aa6d;
            color: #fff;
            padding: 10px 20px;
            border: none;    
            cursor: pointer;}

        button:hover {
            color: #024a2f;
            background-color: #01915c;}

        table {
            margin-top: 35px;
            border-collapse: collapse;
            width: 100%;}

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;}

        th {

            color: white;                   
            background-color: #04aa6d;
            box-shadow: 3px 1px 8px #a19f9f;}

      </style>

    </head>
          <body>
          <div class="titulo_modulo">  
          <h2>Módulo 4</h2>
          <h2  style="font-size: 14px;"> Aula 8 -Desafio Final</h2></div>

                <div class="bloco_body">
                    <p><h2 class="h2_a">Escola php++</h2></p>
                    <h2 class="h2">Cadastro de Alunos</h2>

                    <form>
                        <div class="bloco_form">                            
                            <input  type="hidden" name="id" value="<?=$id?>">
                        </div>                
                        <div class="bloco_form">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" value="<?=$nome?>">
                        </div>                
                        <div class="bloco_form">
                            <label for="cidade">Cidade:</label>
                            <input type="text"name="cidade" value="<?=$cidade?>">
                        </div>                
                        <div class="bloco_form"><label for="pais">País:</label>
                            <input type="text" name="pais" value="<?=$pais?>">
                        </div>                
                        <div class="bloco_form">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" value="<?=$telefone?>">
                        </div>
                            <button name=acao value="<?=$acao?>"><?=$acao?></button>
                    </form> <div></div>

                    <table border="1">
            
              <tr>
                <th >Id</td>
                 <th >Nome</th>
                 <th >Cidade</th>
                 <th >País</th>
                 <th >Telefone</th>
                 <th colspan="2">Atualizar cadastro</th>
              </tr>

                <?php foreach($infobase as $td)
                 
                {?>

                    <tr>
                      <td><?=$td['id']?></td>
                      <td><?=$td['nome']?></td>
                      <td><?=$td['cidade']?></td>
                      <td><?=$td['pais']?></td>
                      <td><?=$td['telefone']?></td>
                      <td><a href="?acao=remover&id=<?=$td['id']?>">Remover</a></td>
                      <td><a href="?acao=consultar&id=<?=$td['id']?>">Consultar</a></td>
                    </tr>


                     

                <?php }?>             


          </table> 





                </div>


            </body>
</html>
