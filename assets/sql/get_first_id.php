<?php
  $sql = "SELECT school_ID FROM `".$this->table."` 
          LIMIT 1;";
  $result = $this->process_query($sql);
?>