<?php

require_once('./config/db.php');

$resp = new stdclass();

try {

    $tarefa =  $_POST['tarefa'];
    $created = date("Y-m-d H:i:s");
    $updated = date("Y-m-d H:i:s");

    if(empty($tarefa)) throw new Exception("O campo tarefa está vazio, insira algo!", '');
    

    $insert = mysql_query("INSERT INTO tarefas(tarefa,created_at,updated_at)
                            VALUES('$tarefa', '$created', '$updated')") or die (mysql_error());

    $resp->success = true;
    $resp->msg = "Tarefa inserida com Sucesso";
    $resp->location = 'index.php';
    
} catch (Exception $e) {
    $resp->success = false;
    $resp->msg = $e->getMessage();
}

echo json_encode($resp, JSON_HEX_QUOT);