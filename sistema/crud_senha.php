<?php
include 'banco.php';
if (isset($_POST["localizar"])) {
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$query = $conexao->query("SELECT * FROM funcionario WHERE email = '" . $email . "' AND cpf = '" . $cpf . "'");
    
    if($query->num_rows > 0) {
        
    
        header("Location: atualizar_senha.php?sucesso=1");
    
    } else {
    
        header("Location: atualizar_senha.php?erroloc=1");
    
    }
}

if (isset($_POST["atualizar"])) {
                                               
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $Csenha =$_POST['Corfirmasenha'];
    $novasenha = $_POST['nsenha'];
    if($Csenha == $novasenha ){
        $sql = "update funcionario set senha = '$_POST[nsenha]' where cpf = '$_POST[cpf]' and email = '$_POST[email]'";
        $resul = $conexao->query($sql);
        $linhasAfetadas = $conexao->affected_rows;
        if ($linhasAfetadas > 0) {
            mysqli_close($conexao);
            header("Location: atualizar_senha.php?sucesso=2");
        } else { 
            mysqli_close($conexao);
            header("Location: atualizar_senha.php?erro=2");   
        }
    }else{

        header("Location: atualizar_senha.php?erro=3");
    }
    
} 