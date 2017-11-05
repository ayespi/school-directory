<?php
  $sql =   "INSERT INTO `".$this->table."` (
    `school_ID`, 
    `school_name`, 
    `school_address`, 
    `school_city`, 
    `school_state`, 
    `school_zip`, 
    `school_image_url`, 
    `school_date_added`
    ) VALUES (
      NULL, 
      '$this->name', 
      '$this->address', 
      '$this->city', 
      '$this->state', 
      '$this->zip', 
      '$this->image_url', 
      CURRENT_TIMESTAMP
    );";
  $result = $this->process_query($sql);
?>


