<?php
// *** Load Config File ***
  require('./config.php');
// *** Create New School Object ***
  $Controller = new SchoolsController($connection);
// *** Check For GET Request ***
  if(!isset($_GET['id'])){
    redirect('./index.php');
  }
  $id = $_GET['id'];
  $school = $Controller->Show($id);

  // prewrap($school);
  include('../../assets/includes/header.inc.php'); 
?>
    <div class="container">
      <h1>Edit School</h1>
      <form action="./update.php" method="post">
        <p>
          <input type="hidden" name="school_ID" value="<?php echo($id);?>">
        </p>
        <p>
          <label for="school_name">Name</label><br>
          <input type="text" name="school_name" id="school_name" value="<?php echo($school['name']);?>">
        </p>
        <p>
          <label for="school_address">Address</label><br>
          <input type="text" name="school_address" id="school_address" value="<?php echo($school['address']);?>">
        </p>
        <p>
          <label for="school_city">City</label><br>
          <input type="text" name="school_city" id="school_city" value="<?php echo($school['city']);?>">
        </p>
        <p>
          <label for="school_state">State</label><br>
          <input type="text" name="school_state" id="school_state" value="<?php echo($school['state']);?>">
        </p>
        <p>
          <label for="school_name">Zip</label><br>
          <input type="text" name="school_zip" id="school_zip" value="<?php echo($school['zip']);?>">
        </p>
        <p>
          <label for="school_image_url">Image URL</label><br>
          <input type="text" name="school_image_url" id="school_image_url" value="<?php echo($school['image_url']);?>">
        </p>
        <p><input type="submit" name="update_school" value="Submit"> | <a href="./index.php">View Schools</a></p>
      </form>
    </div>
<?php include('../../assets/includes/footer.inc.php'); ?>