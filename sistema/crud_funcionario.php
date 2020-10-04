<?php
include "banco.php";
# verifica se o campo ativo possui algum valor , senão ele atribui o N e salva no banco
if(isset($_REQUEST["ativo"])) {
    $ativo = $_REQUEST["ativo"];
}  else {
    $ativo = "N";
}
if(isset($_REQUEST["Cod_funcionario"])) {
    if(isset($_REQUEST["excluir"])) {
          
        $consulta = "DELETE FROM funcionario WHERE Cod_funcionario = " . $_REQUEST["Cod_funcionario"];
        # a variavel operacao está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
        # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 3;
    } else {
        $consulta = "UPDATE funcionario SET nome = '".$_REQUEST["nome"]."', cpf = '".$_REQUEST["cpf"]."', dt_nascimento = '".$_REQUEST["dt_nascimento"]."', cpf = '".$_REQUEST["cpf"]."', email = '".$_REQUEST["email"]."', sexo = '".$_REQUEST["sexo"]."', telefone = '".$_REQUEST["telefone"]."', logradouro = '".$_REQUEST["logradouro"]."', num_comp = '".$_REQUEST["num_comp"]."', cidade = '".$_REQUEST["cidade"]."', estado = '".$_REQUEST["estado"]."', ativo = '".$_REQUEST["ativo"]."', cep ='".$_REQUEST["cep"]."' WHERE Cod_funcionario = ".$_REQUEST["Cod_funcionario"]."";
                # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
                # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 2;
    }
} else {
    $consulta = "INSERT INTO funcionario (nome,cpf,rg,sexo,telefone,dt_nascimento,email,Cep,logradouro,num_comp,cidade,estado,cargo,salario,horas,dt_admicao,ativo,senha) VALUES ('".$_REQUEST["nome"]."','".$_REQUEST["cpf"]."','".$_REQUEST["rg"]."','".$_REQUEST["sexo"]."','".$_REQUEST["telefone"]."','".$_REQUEST["dt_nascimento"]."','".$_REQUEST["email"]."','".$_REQUEST["Cep"]."','".$_REQUEST["logradouro"]."','".$_REQUEST["num_comp"]."','".$_REQUEST["cidade"]."','".$ativo."', '".$_REQUEST["estado"]."', '".$_REQUEST["cargo"]."', '".$_REQUEST["salario"]."', '".$_REQUEST["horas"]."', '".$_REQUEST["ativo"]."', '".$_REQUEST["senha"]."')";
            # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
            # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
    $operacao = 1;
}

$query = $conexao->query($consulta);

#verifica se houve algum erro  do crud e concatena com a variavel local operação
if(!$query) {
    header("Location: cad_funcionariov2.php?erro=" . $operacao);
} else {
    header("Location: cad_funcionariov2.php?sucesso=" . $operacao);
}
