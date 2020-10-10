<?php
include "banco.php";
# verifica se o campo ativo possui algum valor , senão ele atribui o N e salva no banco
if(isset($_REQUEST["ativo"])) {
    $ativo = $_REQUEST["ativo"];
}  else {
    $ativo = "N";
}
if(isset($_REQUEST["cod_fornecedor"])) {
    if(isset($_REQUEST["excluir"])) {
          
        $consulta = "DELETE FROM fornecedor WHERE cod_fornecedor = " . $_REQUEST["cod_fornecedor"];
        # a variavel operacao está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
        # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 3;
    } else {
        $consulta = "UPDATE fornecedor SET cnpj = '".$_REQUEST["cnpj"]."', fornecedor = '".$_REQUEST["fornecedor"]."', logradouro = '".$_REQUEST["logradouro"]."',cep = '".$_REQUEST["cep"]."', num_comp = '".$_REQUEST["num_comp"]."', cidade = '".$_REQUEST["cidade"]. "', estado = '".$_REQUEST["estado"]."', telefone = '".$_REQUEST["telefone"]."' WHERE cod_fornecedor = ".$_REQUEST["cod_fornecedor"]."";
                
        $operacao = 2;
    }
} else {
    $consulta = "INSERT INTO fornecedor ( cnpj, fornecedor, logradouro, cep, num_comp, cidade, estado, telefone) VALUES ('".$_REQUEST["cnpj"]."','".$_REQUEST["fornecedor"]."','".$_REQUEST["logradouro"]."', '".$_REQUEST["cep"]."','".$_REQUEST["num_comp"]."','".$_REQUEST["cidade"]."','".$_REQUEST["estado"]."','".$_REQUEST["telefone"]."')";
            # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
            # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
    $operacao = 1;
}

var_dump($consulta);
$query = $conexao->query($consulta);


#verifica se houve algum erro  do crud e concatena com a variavel local operação
if(!$query) {
    header("Location: cad_fornecedor.php?erro=" . $operacao);
} else {
    header("Location: cad_fornecedor.php?sucesso=" . $operacao);
}
