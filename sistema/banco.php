<?php
    $conexao = new mysqli('localhost', 'root', ' ', 'dog_world');
    session_start();
    if (!$conexao) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL.";
        echo "Debugging errno: " . mysqli_connect_errno();
        echo "Debugging error: " . mysqli_connect_error();
        exit;
    }
    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
     
    mysqli_close($conexao);

?>