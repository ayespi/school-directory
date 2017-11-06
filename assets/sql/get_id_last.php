<?php
  $sql = "SELECT school_ID 
  FROM `".$this->table."` 
  ORDER BY school_ID DESC 
  LIMIT 1;";

  $result = $this->process_query($sql);
?>