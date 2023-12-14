<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <link rel="stylesheet" type="text/css" href="../projeto/css/estilo.css" media="screen" />
</head>

    <body>
        <div class="titulo_modulo">
              <h2>Módulo 7</h2>
              <h2 style="font-size:14px;"> Cadastro</h2>
        </div>

        <div class="bloco_body">
              <p><h2 class="h2_a">Loja </h2></p>
              <h2 class="h2">Cadastro de Clientes</h2>   
       <form method="Post" action='/clientes'>

        <div class="bloco_form">
              <input type="hidden" name="id"  value="<?=$id?>">               
              <label style="font-size: 14px;" for="nome" >Nome</label>
              <input type="text" name="nome" value="<?=$nome?>" >
        </div>
        <div class="bloco_form">
              <label for="email">E-mail</label>
              <input type="text" name="email" value="<?=$email?>">
        </div>
    <?php btn('acao');

    ?>
        </form>


              <a href='/produtos'><button style="margin-left:430px;">Cadastro de Produtos</button></a>
         
        <table>
              <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th colspan="2">Editar Cadastro</th>
              </tr>

    <?php 
        foreach($arrayCadastro as $td) { ?>
              <tr>
              <td><?=$td['id']?></td>
              <td><?=$td['nome']?></td>
              <td><?=$td['email']?></td>

              <td><a href="?acao=remover&id=<?=$td['id']?>"><button>Remover</button></a></td>
              <td><a href="?acao=consultar&id=<?=$td['id']?>&nome=<?=$td['nome']?>&email=<?=$td['email']?>"><button>Consultar</button></a></td>
              </tr>
    <?php } ?>


        </table>
        </div>
    </body>
</html>
