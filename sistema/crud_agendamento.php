<?php
include "banco.php";
# verifica se o campo ativo possui algum valor , senão ele atribui o N e salva no banco
if(isset($_REQUEST["ativo"])) {
    $ativo = $_REQUEST["ativo"];
}  else {
    $ativo = "N";
}
if(isset($_REQUEST["cod_servico"])) {
    if(isset($_REQUEST["excluir"])) {
          
        $consulta = "DELETE FROM atendimento WHERE cod_servico = " . $_REQUEST["cod_servico"];
        # a variavel operacao está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
        # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 3;
    } else {
        $consulta = "UPDATE atendimento SET dt_agendamento = '".$_REQUEST["dt_agendamento"]."', valor = '".$_REQUEST["valor"]."', tipo_atendimento = '".$_REQUEST["tipo_atendimento"]."', horario = '".$_REQUEST["horario"]."' WHERE cod_servico = ".$_REQUEST["cod_servico"]."";
                # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
                # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
        $operacao = 2;
    }
} else {
    $consulta = "INSERT INTO atendimento ( cod_funcionario, cod_cliente, id_animal, dt_agendamento, valor, tipo_atendimento, horario, status, nome) VALUES (".$_SESSION["Cod_funcionario"].",'".$_REQUEST["cod_cliente"]."','".$_REQUEST["id_animal"]."','".$_REQUEST["dt_agendamento"]."','".$_REQUEST["valor"]."','".$_REQUEST["tipo_atendimento"]."','".$_REQUEST["horario"]."','','".$_REQUEST["nome"]."')";
            # a variavel operação está atrelada as mensagem de sucesso que aparecem na cor verde após realizar as funões do crud
            # tanto as mensagem de sucesso quando as de erro estão entrelaçadas a está variavel
    $operacao = 1;
}


$query = $conexao->query($consulta);
//var_dump($consulta);

#verifica se houve algum erro  do crud e concatena com a variavel local operação

if(!$query) {
   header("Location: agendamento.php?erro=" . $operacao);
} else {
    header("Location: agendamento.php?sucesso=" . $operacao);
}




























?>