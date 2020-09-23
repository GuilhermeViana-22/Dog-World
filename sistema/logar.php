<?php
include 'banco.php';

    $cpf = $_REQUEST["cpf"];
    $senha = $_REQUEST["senha"];
    $query = $conexao->query("SELECT * FROM funcionario WHERE cpf_funcionario = '" . $cpf . "' AND senha = '" . $senha . "'");
    
    if($query->num_rows > 0) {
        
        $_SESSION["cpf"] = $cpf;
        while($dados = $query->fetch_assoc()) {
            $_SESSION["nome"] = $dados["nome_funcionario"];
            $_SESSION["cargo"] = $dados["cargo"];
        }
    
        header("Location: index.php");
    
    } else {
    
        header("Location: login.php?erro=1");
    
    }











?>