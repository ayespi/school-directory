<?php include('../../assets/includes/header.inc.php'); ?>
    <div class="container">
      <h1>Add School</h1>
      <hr>
      <form action="./create.php" method="post">
        <p>
          <label for="school_name">Name</label><br>
          <input type="text" name="school_name" id="school_name">
        </p>
        <p>
          <label for="school_address">Address</label><br>
          <input type="text" name="school_address" id="school_address">
        </p>
        <p>
          <label for="school_city">City</label><br>
          <input type="text" name="school_city" id="school_city">
        </p>
        <p>
          <label for="school_state">State</label><br>
          <input type="text" name="school_state" id="school_state">
        </p>
        <p>
          <label for="school_name">Zip</label><br>
          <input type="text" name="school_zip" id="school_zip">
        </p>
        <p>
          <label for="school_image_url">Image URL</label><br>
          <input type="text" name="school_image_url" id="school_image_url">
        </p>
        <p><input type="submit" name="add_school" value="Submit"> | <a href="./index.php">Cancel</a></p>
      </form>
    </div>
<?php include('../../assets/includes/header.inc.php'); ?>