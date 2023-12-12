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
        <h2 style="font-size:14px;">Cadastro</h2>
    </div>

    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Loja php++</h2>
        </p>
        <h2 class="h2">Cadastro de Usuários</h2>

        <form method="POST">
            <div class="bloco_form">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="bloco_form">
                <label for="senha">Senha</label>
                <input type="password" name="senha">
            </div>
            <button>Cadastrar</button>

        </form>


        <?php

        include "bd.php";


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $hash_senha = password_hash($senha, PASSWORD_DEFAULT);

            $pdo = conexao();

            $sql = "INSERT INTO usuarios (email,hash_senha) VALUES (:email,:hash_senha)";
            $consulta = $pdo->prepare($sql);
            $consulta->bindParam(':email', $email);
            $consulta->bindParam(':hash_senha', $hash_senha);
            $consulta->execute();
            $pgsucess = "http://localhost/aula/desafio_modulo8/sucess.php";
            header("Location: " . $pgsucess);
            exit();
        }
        ?>
    </div>
</body>

</html>