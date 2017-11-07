<?php 
  require('./config.php');
// *** Create New School Object ***
  $Controller = new SchoolsController($connection);
// *** Check For GET Request ***
  if(!isset($_GET['id'])){
    redirect('./index.php');
  }
  $id = $_GET['id'];
  $school = $Controller->School->get_one_by_id($id);
  $rows = $Controller->School->get_rows();
  // prewrap($school);
  $first  = $Controller->School->get_id_first();
  $last   = $Controller->School->get_id_last();
// ** Determine IDs for Prev and Next ***
  $prev   = $Controller->School->get_id_prev($id);
  $next   = $Controller->School->get_id_next($id);

  include('../../assets/includes/header.inc.php'); 
?>
    <div class="container"><span>Number of Records: <?php echo($rows); ?></span><br>
      <div class="banner-school">
        <img src="../../assets/images/school/<?php echo($school['image_url']);?>" alt="<?php echo($school['name']);?>">
        <div class="controls-cycle">
          <p>
            <a href="./show.php?id=<?php echo($first);?>"><<</a> | 
            <a href="./show.php?id=<?php echo($prev);?>">Prev</a> |
            <a href="./show.php?id=<?php echo($next);?>">Next</a> | 
            <a href="./show.php?id=<?php echo($last);?>">>></a>
          </p>
        </div>
      </div>
  <hr>
      <h3><?php echo($school['name']);?></h3>

      <p>
      <?php echo($school['address']);?><br>
      <?php echo($school['city']);?>, <?php echo($school['state']);?> <?php echo($school['zip']);?><br>

      </p>
      <p>
      <a href="./edit.php?id=<?php echo($id);?>">Update</a> | <a href="./delete.php?id=<?php echo($id);?>">Delete</a>
      </p>

      <!-- <p>
      <a href="./edit.php?id=<?php echo($id);?>">Update</a> | <a href="./delete.php?id=<?php echo($id);?>">Delete</a>
      </p> -->
    </div>
<?php include('../../assets/includes/footer.inc.php'); ?>