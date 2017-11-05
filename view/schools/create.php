<?php 
require('./config.php');
$School = new School($connection);
if(isset($_POST['add_school'])){
  $params = array(
    'name'      =>    $_POST['school_name'],
    'address'   =>    $_POST['school_address'],
    'city'      =>    $_POST['school_city'],
    'state'     =>    $_POST['school_state'],
    'zip'       =>    $_POST['school_zip'],
    'image_url' =>    $_POST['school_image_url']
  );
  $School->insert($params);
}
  redirect('./index.php');
?>