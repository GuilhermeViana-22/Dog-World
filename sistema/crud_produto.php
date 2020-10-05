<?php
include "banco.php";
# verifica se o campo ativo possui algum valor , senão ele atribui o N e salva no banco
if(isset($_REQUEST["ativo"])) {
    $ativo = $_REQUEST["ativo"];
}  else {
    $ativo = "N";
}
if(isset($_REQUEST["cod_produto"])) {
    if(isset($_REQUEST["excluir"])) {
          
        $consulta = "DELETE FROM produto WHERE cod_produto = " . $_REQUEST["cod_produto"];
        # a variavel operacao está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
        # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 3;
    } else {
        $consulta = "UPDATE produto SET titulo = '".$_REQUEST["titulo"]."', quantidade = '".$_REQUEST["quantidade"]."', cod_lote = '".$_REQUEST["cod_lote"]."', valor_unitario = '".$_REQUEST["valor_unitario"]."', cod_fornecedor = '".$_REQUEST["cod_fornecedor"]."', ativo = '".$_REQUEST["ativo"]."' WHERE cod_produto = ".$_REQUEST["cod_produto"]."";
                
        $operacao = 2;
    }
} else {
    $consulta = "INSERT INTO produto ( titulo, quantidade, cod_lote, valor_unitario, cod_fornecedor, ativo) VALUES ('".$_REQUEST["titulo"]."','".$_REQUEST["quantidade"]."','".$_REQUEST["cod_lote"]."', '".$_REQUEST["valor_unitario"]."','".$_REQUEST["cod_fornecedor"]."','".$ativo."'  )";
            # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
            # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
    $operacao = 1;
}

echo $consulta;

$query = $conexao->query($consulta);

#verifica se houve algum erro  do crud e concatena com a variavel local operação
if(!$query) {
    header("Location: cad_Produto.php?erro=" . $operacao);
} else {
    header("Location: cad_Produto.php?sucesso=" . $operacao);
}
