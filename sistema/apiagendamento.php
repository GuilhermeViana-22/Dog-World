<?php 
include "banco.php";

$queryAtendimento = $conexao->query("SELECT * FROM produto");
$rows = array();
while($r = $queryAtendimento->fetch_assoc()) {
    $rows[] = $r;
}

echo json_encode($rows);

?>