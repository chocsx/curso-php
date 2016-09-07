<?php

require_once('./config/db.php');

$id = $_GET['id'];

$query = mysql_query("SELECT * FROM tarefas WHERE id = $id") or die(mysql_error());
$result = mysql_fetch_array($query);

?>
<?php include_once('include-header.php') ?>
    <h1>Tarefa: <?= $result['tarefa'] ?></h1>
      <form class="formTarega" action="updateTarefa.php" method="post">
        <div class="form-group">
          <label for="tarefa" class="col-sm-3 control-label">Tarefa</label>
          <input type="hidden" name="id" value="<?= $result['id'] ?>">
        </div>
        <div class="form-group col-sm-6">
          <input type="text" id="tarefa" name="tarefa" value="<?= $result['tarefa'] ?>" class="form-control ">
        </div>
        <div class="form-group">
          <input type="submit" value="Enviar" class="col-sm-3 btn btn-success">
        </div>
      </form>
<?php include_once('include-footer.php'); ?>
