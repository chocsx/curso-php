<?php require_once('./config/db.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Tarefas</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css" media="screen" title="no title">
  </head>
  <body>
  <div class="container">
  <div class="panel panel-default">
  <div class="panel-body">
  <h2>Lista de Tarefas: Wesllen</h2>
  <div class="formulario">
      <form class="formTarefa form-horizontal" action="saveTarefa.php" method="post">
	  <div class="form-group">
	      <label for="tarefa" class="col-sm-3 control-label">Tarefa</label>
		  <div class="col-sm-6">
          <input type="text" name="tarefa" id="tarefa" class="form-control">
		  </div>
	  </div>
           <div class="form-group">
           <div class="col-sm-offset-3 col-sm-6">		   
          <input type="submit"  value="enviar" class="btn btn-default">
		  </div>
		  </div>
      </form>
    </div>   
  </div>  
  </div>
  <div class="panel panel-default">
  <div class="panel-heading">
  Tarefas Recentes
  </div>
  </div>
      
    <div class="tarefas">
      <ul>
        <?php
           $query = mysql_query("SELECT * FROM tarefas") or die(mysql_error());
           while ($row = mysql_fetch_array($query, MYSQL_NUM)){
          ?>


        <li>
          <span><?= $row[1] ?> </span>
          <a href="editar.php?id=<?= $row[0]?>" class="butao btn-success">Editar</a>
          <a href="excluir.php?id=<?= $row[0]?>" class="butao btn-excluir">Remover</a>
        </li>
      <?php } ?>
      </ul>
    </div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  </body>
</html>
