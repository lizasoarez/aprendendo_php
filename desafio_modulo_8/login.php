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
        <h2 style="font-size:14px;">Login</h2>
    </div>

    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Loja php++</h2>
        </p>
        <h2 class="h2">Acesso de Clientes</h2>

        <form method="POST">
            <div class="bloco_form">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="bloco_form">
                <label for="senha">Senha</label>
                <input type="password" name="senha">
                <br>
            </div>
            <br>
            <button>Entrar</button>
            <br>
            <br>
        </form>
        <a href="recupera.php"><button>Recuperar senha</button></a>
        <br>
        <br>
        <a href="insere.php">Cadastrar usuário</a>
    </div>

    <?php

    include "bd.php";
    include "funcao.php";
    //$idUsuario=login(false);


    session_start();


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $pdo = conexao();

        $sql = "SELECT id,hash_senha FROM usuarios WHERE email = :email";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(':email', $email);
        $consulta->execute();

        if ($consulta->rowCount() > 0) {
            $resultado = $consulta->fetch();
            $idUsuario = $resultado['id'];
            $hash_senha = $resultado['hash_senha'];

            if (password_verify($senha, $hash_senha)) {
                $_SESSION['idusuario2'] = $idUsuario;
                header("location: inicial.php?idusuario=$idUsuario");
            } else {

                echo "<p style=font-size:smaller;color:red;margin-top:-210px;margin-left:60px>Senha incorreta</p>";
            }
        } else {

            echo "<p style=font-size:smaller;color:red;margin-top:-210px;margin-left:60px>Email incorreto</p>";
        }
    }

    ?>

    </div>
</body>

</html>