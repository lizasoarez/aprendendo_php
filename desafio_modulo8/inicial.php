<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>

<body>
    <div class="titulo_modulo">
        <h2>Módulo 8</h2>
        <h2 style="font-size:14px;"> Página do Usuário</h2>
    </div>

    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Bem Vindo</h2>
        </p>
        <h2 class="h2">Está é a seção do usuário</h2>

        <?php
        session_start();
        $idUsuario = $_SESSION['idusuario2'];

        if (!($idUsuario > 0)) {

            header("location:login.php");
        }


        ?>
    </div>
</body>

</html>