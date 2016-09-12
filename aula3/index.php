  <?php include_once("include-header.php"); ?>

  <div class="panel panel-default">
    <div class="panel-body">
      <h2>Lista de Tarefas: Wesllen</h2>
        <div class="formulario">
      <form class="formTarefa form-horizontal" action="saveTarefa.php" method="post">

	  <div class="form-group">
	      <label for="tarefa" class="col-sm-3 control-label">Tarefa</label>
		  <div class="col-sm-6">
          <input type="text" name="tarefa" id="tarefa" class="form-control" required placeholder="Preencha com a sua tarefa">
		  </div>
	  </div>
           <div class="form-group">
           <div class="col-sm-offset-3 col-sm-6">		   
          <input type="submit"  value="enviar" class="btn btn-default addTarefa">
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
  <div class="panel-body">
  <table class="table table-stripod">
   <thead>
   <th>Tarefas</th>
   	<th>&nbsp;</th>
   	<th>&nbsp;</th>
   </thead>
   <tbody>
        <?php
           $query = mysql_query("SELECT * FROM tarefas") or die(mysql_error());
           while ($row = mysql_fetch_array($query, MYSQL_NUM)){
          ?>
   	<tr>
   	    <td><?= $row[1] ?></td>
   	    <td><a href="editar.php?id=<?= $row[0]?>" class="btn btn-success">Editar</a></td>
   	    <td><a href="excluir.php?id=<?= $row[0]?>" class="btn btn-danger">Remover</a></td>   		
   	</tr>
   	<?php } ?>
   </tbody>
  </table>
  </div>
  </div>


  <?php include_once("include-footer.php");?> 