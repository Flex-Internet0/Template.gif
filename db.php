<?php
   error_reporting(0);
  $connect = mysql_connect("localhost","root","") OR DIE("falha ao conectar ao servidor");
  $db = myslq_select_db("sitetutorial","$connect") OR DIE("falha ao selecionar a DataBase");
?>