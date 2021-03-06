<?php 
require('./config.php');
$Controller = new SchoolsController($connection);
$Schools = $Controller->Index();
include('../../assets/includes/header.inc.php'); 
?>
    <div class="container">
      <h1>School Directory</h1>
      <table class="table table-bordered table-condensed">
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
      <hr>
      <p><a href="./new.php">Add School</a> | <a href="./json.php" target="_blank">View JSON</a></p>
    </div>
<?php include('../../assets/includes/header.inc.php'); ?>