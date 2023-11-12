<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
        .titulo_modulo {

            line-height: 0.3;
            color: #fff;
            width: 250px;
            padding: 10px;
            margin-top: -3px;
            margin-left: -11px;
            margin-bottom: 18px;
            background-color: #04aa6d;
            border-radius: 0px 20px 20px 0px;
            box-shadow: -1px -2px 6px gray;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 14px
        }

        .bloco_body {
            max-width: 600px;
            padding: 60px;
            box-shadow: 1px 7px 9px 1px lightgray;
        }

        .bloco_body .h2_a {
            color: #04aa6d;
            margin-top: -37px;
            font-size: 30px;
            text-shadow: 1px 4px 3px #008b5830;
        }

        .bloco_body .h2 {
            color: #000000cf;
            font-size: 20px;
            margin-top: -26px;
        }

        .bloco_form {
            margin-bottom: 20px;
        }

        label {
            color: #303030;
            font-weight: bold;
        }

        select {
            color: #303030;
            margin: 10px;
            margin-left: 0px;
            border: 1px solid #cccccc;
        }

        input[type="text"] {

            display: block;
            width: 70%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        button {

            font-size: 14px;
            background-color: #04aa6d;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            color: #024a2f;
            background-color: #01915c;
        }

        

        table {
            margin-top: 35px;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            color: white;
            background-color: #04aa6d;
            box-shadow: 3px 1px 8px #a19f9f;
        }
    </style>

</head>

<body>
    <div class="titulo_modulo">
        <h2>Módulo 6</h2>
        <h2 style="font-size:14px;"> Enviar arquivo</h2>
    </div>
    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Formulário de upload de arquivo</h2>
        </p>

        <form method="post" enctype="multipart/form-data">
            <div class="bloco_form">
                <p><label style="font-size: 14px;" for="nome">Selecione um arquivo para enviar:</label></p>
                <input type="file" name="fileToupload" id="fileToupload"><br><br>
            </div>
                <button name="submit" value="enviarArquivo">Enviar</button> <br><br>
        </form>

        <?php

        if (isset($_POST["submit"])) {
            $pasta = "upload/";
            $arquivo = $pasta . basename($_FILES["fileToupload"]["name"]);
            if (move_uploaded_file($_FILES["fileToupload"]["tmp_name"], $arquivo)) {
                echo  "O arquivo foi enviado com sucesso";
            } else {
                echo "Houve um problema no envio";
            }
        }

        ?>

</body>

</html>