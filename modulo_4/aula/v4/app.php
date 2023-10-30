      <?php

      $host="localhost";
      $user="usuario";
      $password="senhadousuario";
      $bd="aulaphp";
      $porta="3307";

      $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);
      $sql = "SELECT id,nome,nota FROM notas";
      $consulta = $conexao->prepare($sql);
      $consulta->execute();
      $arraycadastro = $consulta->fetchAll(PDO::FETCH_ASSOC);

      include'./template.php'

      ?>





