<?php

$usuario = 'root';
$senha = '';
$host = 'localhost';
$banco = 'cursophp';

$conexao = mysql_connect($host,$usuario,$senha) or die(mysql_error());
$selectBanco = mysql_select_db($banco) or die(mysql_error());
