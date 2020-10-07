<?php
include "banco.php";
# verifica se o campo ativo possui algum valor , senão ele atribui o N e salva no banco
if(isset($_REQUEST["ativo"])) {
    $ativo = $_REQUEST["ativo"];
}  else {
    $ativo = "N";
}
if(isset($_REQUEST["id_animal"])) {
    if(isset($_REQUEST["excluir"])) {
          
        $consulta = "DELETE FROM animal WHERE id_animal = " . $_REQUEST["id_animal"];
        # a variavel operacao está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
        # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 3;
    } else {
        $consulta = "UPDATE animal SET nome = '".$_REQUEST["nome"]."', raca = '".$_REQUEST["raca"]."', rga = '".$_REQUEST["rga"]."', idade = '".$_REQUEST["idade"]."', tipo = '".$_REQUEST["tipo"]."', sexo = '".$_REQUEST["sexo"]."', observacao = '".$_REQUEST["observacao"]."', ativo = '".$_REQUEST["ativo"]."' WHERE id_animal = ".$_REQUEST["id_animal"]."";
                # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
                # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 2;
    }
} else {
    $consulta = "INSERT INTO animal (nome,raca,rga,idade,tipo,sexo,observacao,ativo,id_cliente) VALUES ('".$_REQUEST["nome"]."','".$_REQUEST["raca"]."','".$_REQUEST["rga"]."','".$_REQUEST["idade"]."','".$_REQUEST["tipo"]."','".$_REQUEST["sexo"]."','".$_REQUEST["observacao"]."','".$_REQUEST["ativo"]."','".$_REQUEST["id_cliente"]."')";
            # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
            # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
    $operacao = 1;
}
var_dump($consulta);

$query = $conexao->query($consulta);

#verifica se houve algum erro  do crud e concatena com a variavel local operação
if(!$query) {
    header("Location: cad_animal.php?erro=" . $operacao);
} else {
    header("Location: cad_animal.php?sucesso=" . $operacao);
}