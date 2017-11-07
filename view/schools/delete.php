<?php 
require('./config.php');
if(!isset($_GET['id'])){
  redirect('./index.php');
}
$id = $_GET['id'];
$Controller = new SchoolsController($connection);
$school = $Controller->Show($id);
// prewrap($school);
include('../../assets/includes/header.inc.php'); 
?>
    <div class="container">
      <div class="content-delete">
        <h1>Delete School</h1>
          <hr>
          <!-- <img src="../../assets/images/school/<?php echo($school['image_url']);?>" alt="<?php echo($school['name']);?>"> -->
          <p>Are you sure you want to delete <span><strong><?php echo($school['name']); ?></strong></span>???</p>
          <p><a href="./show.php?id=<?php echo($id); ?>">Cancel Delete</a> | <a href="./destroy.php?id=<?php echo($id); ?>">Delete Forever</a></p>
      </div>
    </div>
<?php include('../../assets/includes/header.inc.php'); ?>