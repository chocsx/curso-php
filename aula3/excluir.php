<?php

require_once('./config/db.php');

$id = $_GET['id'];

$insert = mysql_query("DELETE FROM tarefas WHERE id = $id") or die (mysql_error());

header("Location: index.php");
