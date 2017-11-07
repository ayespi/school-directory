<?php include('../../assets/includes/header.inc.php'); ?>
    <div class="container">
      <h1>Add School</h1>
      <hr>
      <form action="./create.php" method="post">
        <div class="form-group">
          <label for="school_name">Name</label><br>
          <input class="form-control" type="text" name="school_name" id="school_name">
        </div>
        <div class="form-group">
          <label for="school_address">Address</label><br>
          <input class="form-control" type="text" name="school_address" id="school_address">
        </div>
        <div class="form-group">
          <label for="school_city">City</label><br>
          <input class="form-control" type="text" name="school_city" id="school_city">
        </div>
        <div class="form-group">
          <label for="school_state">State</label><br>
          <input class="form-control" type="text" name="school_state" id="school_state">
        </div>
        <div class="form-group">
          <label for="school_name">Zip</label><br>
          <input class="form-control" type="text" name="school_zip" id="school_zip">
        </div>
        <div class="form-group">
          <label for="school_image_url">Image URL</label><br>
          <input class="form-control" type="text" name="school_image_url" id="school_image_url">
        </div>
        <p><input type="submit" name="add_school" value="Submit"> | <a href="./index.php">Cancel</a></p>
      </form>
    </div>
<?php include('../../assets/includes/header.inc.php'); ?>