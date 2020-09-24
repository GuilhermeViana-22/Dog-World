<?php
include 'banco.php';

    $email_funcionario = $_REQUEST["email_funcionario"];
    $senha = $_REQUEST["senha"];
    $query = $conexao->query("SELECT * FROM funcionario WHERE email_funcionario = '" . $email_funcionario . "' AND senha = '" . $senha . "'");
    
    if($query->num_rows > 0) {
        
        $_SESSION["email_funcionario"] = $email_funcionario;
        while($dados = $query->fetch_assoc()) {
            $_SESSION["nome"] = $dados["nome_funcionario"];
            $_SESSION["cargo"] = $dados["cargo"];
        }
    
        header("Location: index.php");
    
    } else {
    
        header("Location: login.php?erro=1");
    
    }











?>