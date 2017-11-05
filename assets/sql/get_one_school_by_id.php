<?php
  $sql = "SELECT * FROM `".$this->table."` 
          WHERE school_ID='$id' 
          LIMIT 1;";
  $result = $this->process_query($sql);
?>