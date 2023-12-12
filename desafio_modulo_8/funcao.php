<?php

function chaveRandomica(){

try {
    $bytes = random_bytes(32); // Gera 32 bytes aleatórios

    $chaveAleatoria = bin2hex($bytes); // Converte para representação hexadecimal

    return $chaveAleatoria;

} catch (Exception $e) {
    echo "Erro ao gerar chave aleatória: " . $e->getMessage();
    exit;
}


}

?>
