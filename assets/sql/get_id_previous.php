<?php
  $sql = "SELECT school_ID 
          FROM `".$this->table."` 
          WHERE school_ID < '$id'
          ORDER BY school_ID DESC
          LIMIT 1;";
  $result = $this->process_query($sql);
?>