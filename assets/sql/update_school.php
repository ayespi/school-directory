<?php

  $sql = "UPDATE `".$this->table."` 
  SET `school_name`   = '$this->name', 
  `school_address`    = '$this->address', 
  `school_city`       = '$this->city', 
  `school_state`      = '$this->state', 
  `school_zip`        = '$this->zip', 
  `school_image_url`  = '$this->image_url'
  WHERE `".$this->table."`.`school_ID` = '$this->id';";

  $result = $this->process_query($sql);

?>