<?php 
require('./config.php');
$Controller = new SchoolsController($connection);
$Schools = $Controller->Index();
$json = $Controller->School->json;
// prewrap($Schools);
// prewrap($Controller);
echo($json);
?>