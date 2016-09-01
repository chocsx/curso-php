<?php

require_once('./config/db.php');

$id = $_GET['id'];

$query = mysql_query("SELECT * FROM tarefas WHERE id = $id") or die(mysql_error());
$result = mysql_fetch_array($query);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tarefa: <?= $result['tarefa'] ?></title>
    <link rel="stylesheet" href="./css/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Tarefa: <?= $result['tarefa'] ?></h1>
    <div class="formulario">
      <form class="formTarega" action="updateTarefa.php" method="post">
        <label for="tarefa">Tarefa</label>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
        <input type="text" id="tarefa" name="tarefa" value="<?= $result['tarefa'] ?>">
        <input type="submit" value="Enviar">
      </form>
    </div>
  </body>
</html>
