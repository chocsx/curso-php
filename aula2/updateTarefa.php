<?php
require_once('./config/db.php');

$id = $_POST['id'];
$updated = date("Y-m-d H:i:s");
$query = @mysql_query("UPDATE tarefas SETtarefa = '$tarefa', updated_at = '$updated'
WHERE id = '$id'") or die(mysql_error());

header("Location: index.php");
