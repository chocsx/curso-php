<?php

require_once('./config/db.php');

$id = $_POST['id'];
$tarefa =  $_POST['tarefa'];
$updated = date("Y-m-d H:i:s");

$insert = mysql_query("UPDATE tarefas SET tarefa = '$tarefa', updated_at = '$updated'
                       WHERE id = '$id' ") or die (mysql_error());

header("Location: index.php");
