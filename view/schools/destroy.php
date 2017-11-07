<?php 
require('./config.php');
if(!isset($_GET['id'])){
  redirect('./index.php');
}
$id = $_GET['id'];
$Controller = new SchoolsController($connection);
$school = $Controller->Delete($id);
// prewrap($school);
?>