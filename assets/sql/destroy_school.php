<?php
  $sql = "DELETE FROM `".$this->table."` 
          WHERE school_ID='$id';";
  $result = $this->process_query($sql);
?>