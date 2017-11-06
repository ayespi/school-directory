<?php 
require('./config.php');
$Controller = new SchoolsController($connection);
  if(isset($_POST['add_school']))
  {
    require('./params.php');
      $Controller->_New($params);
  }
    redirect('./index.php');
?>