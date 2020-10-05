<?php
    $conexao = new mysqli('localhost','root','','dog_world');
    
    session_start();

    //Recupera a senha
    
  
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