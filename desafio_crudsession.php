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
        <h2>Módulo 5</h2>
        <h2 style="font-size:14px;"> Aula -Desafio</h2>
    </div>
    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Escola php++</h2>
        </p>
        <h2 class="h2">Bonificação de Funcionários</h2>
        
        <form method="POST">
            <div class="bloco_form">
                <label style="font-size: 14px;" for="nome">Nome:</label>
                <input type="text" name="nome">
                <label style="font-size: 14px;" for="idade">Idade:</label>
                <input type="text" name="idade">
                <label style="font-size: 14px;" for="cidade">Cidade</label>
                <input type="text" name="cidade">
                <label style="font-size: 14px;" for="pais">País:</label>
                <input type="text" name="pais">
                <div>
                    <select name=selecao>
                        <option value="">Categoria</option>
                        <option value=empregado>Empregado</option>
                        <option value=socio>Sócio</option>
                        <option value=pJ>Pessoa Jurídica</option>
                    </select><br />
                    <div class="bloco_form">
                        <label for="salario">Salário</label>
                        <input type="text" name="salario">
                    </div>
                </div>
            </div>
            <button name="acao" value="salva">Salva Nome</button>
            <button name="acao" value="exibe">Exibe Nome</button>
        </form>



        <?php
        class Funcionario
        {
            public $nome;
            public $idade;
            public $cidade;
            public $pais;
            public $salario;

            public function __construct($nome, $idade, $cidade, $pais, $salario)
            {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->cidade = $cidade;
                $this->pais = $pais;
                $this->salario = $salario;
            }
            public function bonificacao()
            {
                return $this->salario;
            }
            public function cargo()
            {
                return "funcionario";
            }
        }


        class Socio extends Funcionario
        {
            public function bonificacao()
            {
                return $this->salario * 1.5;
            }
            public function cargo()
            {
                return "socio";
            }
        }
        class Empregado extends Funcionario
        {
            public function bonificacao()
            {
                return $this->salario * 1.2;
            }
            public function cargo()
            {
                return "empregado";
            }
        }
        class PessoaJuridica extends Funcionario
        {
            public function bonificacao()
            {
                return $this->salario * 2.5;
            }
            public function cargo()
            {
                return "pJ";
            }
        }
        class Memoria
        {
            public $campo;
            public function __construct($campo)
            {
                $this->campo = $campo;
            }
            public function salvar($dados)
            {
                if (!isset($_SESSION[$this->campo])) {
                    $_SESSION[$this->campo] = array();
                }
                $_SESSION[$this->campo][] = $dados;
            }
            public function lerDados()
            {
                if (!isset($_SESSION[$this->campo])) {
                    return array();
                }
                return $_SESSION[$this->campo];
            }
        }
        function recebe($param)
        {
            if (isset($_GET[$param])) return $_GET[$param];
            if (isset($_POST[$param])) return $_POST[$param];
            return "";
        }


        session_start();

        $memoria1 = new Memoria("oo5");
        if (recebe("acao") == "salva") {
            $nome = recebe("nome");
            $idade = recebe("idade");
            $cidade = recebe("cidade");
            $pais = recebe("pais");
            $salario = recebe("salario");
            $selecao = recebe("selecao");

            if ($nome != "" && $selecao != "") {
                $pessoa = null;
                if ($selecao == "empregado") {
                    $pessoa = new Empregado($nome, $idade, $cidade, $pais, $salario);
                } else if ($selecao == "socio") {
                    $pessoa = new Socio($nome, $idade, $cidade, $pais, $salario);
                } else if ($selecao == "pJ") {
                    $pessoa = new PessoaJuridica($nome, $idade, $cidade, $pais, $salario);
                }
                $memoria1->salvar($pessoa);
            }
        } else if (recebe("acao") == "exibe") {
        }

        $lista = $memoria1->lerDados();
        $selecao = recebe("selecao");


        if (isset($_POST["remove"])) {
            $campo = $_POST["remove"];
            if (isset($_SESSION['oo5'][$campo])) {
                unset($_SESSION['oo5'][$campo]);
                $_SESSION['oo5'] = array_values($_SESSION['oo5']);
            }
        }


        echo "<br>";

        echo "<table border=1>";
        echo "<tr><th>Nome</th><th>Idade</th><th>Cidade</th><th>País</th><th>Cargo</th><th>Salário</th><th>Salário mais bônus</th><th>Ação</th></tr>";

        foreach ($lista as $id => $pessoa) {
            $nome = $pessoa->nome;

            if ($selecao == $pessoa->cargo()) {
                echo "<tr>";
                echo "<td>" . $pessoa->nome . "</td>";
                echo "<td>" . $pessoa->idade . "</td>";
                echo "<td>" . $pessoa->cidade . "</td>";
                echo "<td>" . $pessoa->pais . "</td>";
                echo "<td>" . $pessoa->cargo() . "</td>";
                echo "<td>" . $pessoa->salario . "</td>";
                echo "<td>" . $pessoa->bonificacao() . "</td>";
                echo "<form method='POST'>";
                echo "<input type='hidden' name='remove' value='$id'>";
                echo "<td><input type='submit' value='Remover'></td>";
                echo "</form>";
                echo "</tr>";
            }
        }


        ?>


</body>
</html>