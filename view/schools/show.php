<?php 
  require('./config.php');
// *** Create New School Object ***
  $School = new School($connection);
// *** Check For GET Request ***
  if(!isset($_GET['id'])){
    redirect('./index.php');
  }
  $id = $_GET['id'];
  $school = $School->get_one_by_id($id);
  $rows = $School->get_rows();
  prewrap($school);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>School Detail</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="container"><span>Number of Records: <?php echo($rows);?></span><br>
      <img src="../../assets/images/school/<?php echo($school['image_url']);?>" alt="<?php echo($school['name']);?>">
      <h1><?php echo($school['name']);?></h1>
      <p>
      <?php echo($school['address']);?><br>
      <?php echo($school['city']);?>, <?php echo($school['state']);?> <?php echo($school['zip']);?><br>

      </p>
      <p>
      <a href="./edit.php?id=<?php echo($id);?>">Update</a> | <a href="./delete.php?id=<?php echo($id);?>">Delete</a>
      </p>
    </div>
  </body>
</html>