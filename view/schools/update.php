<?php 
require('./config.php');
$Controller = new SchoolsController($connection);
  if(isset($_POST['update_school']))
  {
    require('./params_u.php');
      $Controller->Update($params);
      // prewrap($params);
  }
    redirect('./index.php');
?>