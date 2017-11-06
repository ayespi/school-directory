<?php 
require('./config.php');
$Controller = new SchoolsController($connection);
$Schools = $Controller->Index();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Schools Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Schools</h1>
      <table>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>City</th>
          <th>State</th>
        </tr>
        <?php 
          $count = 1;
          foreach ($Schools as $school) 
          { 
            $id = $school['id'];
          ?>
        <tr>
          <td><?php echo($count); ?></td>
          <td><?php echo($school['name']); ?></td>
          <td><?php echo($school['city']); ?></td>
          <td><?php echo($school['state']); ?></td>
          <td><a href="./show.php?id=<?php echo($id);?>">View Detail</a></td>
        </tr>
        <?php 
            $count++;
          } 
        ?>
      </table>
      <p><a href="./new.php">Add School</a> | <a href="./json.php" target="_blank">View JSON</a></p>
    </div>
  </body>
</html>