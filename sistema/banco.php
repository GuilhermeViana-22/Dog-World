<?php
    $conexao = new mysqli('localhost', 'root','','dog_world');
    
    session_start();

    //Recupera a senha
    
    if (isset($_POST["atualizar"])) {
                                               
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];

        $sql = "update funcionario set senha_funcionario = '$_POST[nsenha]' where cpf_funcionario = '$_POST[cpf]' and email_funcionario = '$_POST[email]'";

        $resul = mysqli_query($conexao, $sql);

        if ($resul) {
            echo ' <script type="text/javascript"> alert("Atualizado!")</script>';
            mysqli_close($conexao);
        } else {
            echo ' <script type="text/javascript"> alert("Erro ao atualizar!")</script>';
            mysqli_close($conexao);
        }
    } 
    

    

    if(isset($_POST['cadastrar_produto'])){

        
        $nome_produto = $_POST['nome_produto'];
        $lote_produto = $_POST['lote_produto'];
        $qtda_produto = $_POST['qtda_produto'];
        $dt_produto = $_POST['dt_produto'];
        $categoria_produto = $_POST['categoria_produtos'];
        $valor_produto = $_POST['valor_produto'];
        $fornecedor_idfornecedor = $_POST['fornecedor_idfornecedor'];
        

        
        $conexao ->query ( "INSERT INTO produto (nome_produto, 
        lote_produto, qtda_produto, dt_produto, categoria_produto, valor_produto, fornecedor_idfornecedor)
        VALUES  ('$nome_produto',
        '$lote_produto','$qtda_produto','$dt_produto','$categoria_produto','$valor_produto','fornecedor_idfornecedor')")
            or die($conexao->error);

               
        
    }
?>