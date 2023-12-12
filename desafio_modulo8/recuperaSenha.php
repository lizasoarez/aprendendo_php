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
        <h2 style="font-size:14px;">Recuperar a senha</h2>
    </div>

    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Loja php++</h2>
        </p>
        <h2 class="h2">Recuperar a senha</h2>

        <form method="POST">
            <div class="bloco_form">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="bloco_form">
                <label for="senha">Senha</label>
                <input type="password" name="senha">
            </div>
            <button>Cadastrar nova senha</button>
            <br>

    </div>

    </form>

    <?php
    include "bd.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $pdo = conexao();
        $sql = "SELECT hash_recupera FROM usuarios WHERE email = :email";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(':email', $email);
        $consulta->execute();

        if ($consulta->rowCount() > 0) {
            $resultado = $consulta->fetch();
            $hashRecupera = $resultado['hash_recupera'];

            $hashEnviado = $_GET['hashrecupera'];

            echo "<br>hash salvo: $hashRecupera<br>Hash Vindo: $hashEnviado <br>";

            if ($hashRecupera == $hashEnviado) {
                $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

                $sql = "UPDATE usuarios SET hash_senha=:hash_senha WHERE email =:email";
                $consulta = $pdo->prepare($sql);
                $consulta->bindParam(':email', $email);
                $consulta->bindParam(':hash_senha', $hashSenha);
                $consulta->execute();
                echo "senha alterada";
            } else {
                echo "erro interno";
            }
        }
    }
    ?>
    </div>
</body>

</html>