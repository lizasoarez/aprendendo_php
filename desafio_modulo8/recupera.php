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
        <h2 style="font-size:14px;">Enviar email ao usuário</h2>
    </div>

    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Loja php++</h2>
        </p>
        <h2 class="h2">Enviar email de recuperação de senha</h2>
        <form method="POST">
            <div class="bloco_form">
                <label for="email">E-mail</label>
                <input type="text" name="email">
            </div>
            <button>Enviar</button>
        </form>

        <?php
        include "email.php";
        include "funcao.php";
        include "bd.php";
        //$idUsuario=login(false);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];

            $pdo = conexao();

            $sql = "SELECT id FROM usuarios WHERE email = :email";
            $consulta = $pdo->prepare($sql);
            $consulta->bindParam(':email', $email);
            $consulta->execute();

            if ($consulta->rowCount() > 0) {
                $resultado = $consulta->fetch();
                $idUsuario = $resultado['id'];

                $hashrecupera = chaveRandomica();


                $sql = "UPDATE usuarios SET hash_recupera=:hash_recupera WHERE email =:email";
                $consulta = $pdo->prepare($sql);
                $consulta->bindParam(':email', $email);
                $consulta->bindParam(':hash_recupera', $hashrecupera);
                $consulta->execute();
                echo "<br><br>";
                echo "Um e-mail foi enviado para você com as instruções para a recuperação de senha";


                enviaEmail($email, "Alterar de Senha", "<a href=http://localhost/aula/desafio_modulo8/recuperaSenha.php?hashrecupera=$hashrecupera>Redefinir a senha</a>");
            } else {

                echo "Um e-mail foi enviado para você com as instruções para a recuperação de senha";
            }
        }
        ?>


    </div>
</body>

</html>