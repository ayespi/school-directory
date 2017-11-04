<?php
  $sql = "CREATE TABLE IF NOT EXISTS `".$this->database."`.`".$this->table."` ( 
            `school_ID` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
            `school_name` VARCHAR(255) NOT NULL , 
            `school_address` VARCHAR(100) NOT NULL , 
            `school_city` VARCHAR(50) NOT NULL , 
            `school_state` VARCHAR(50) NOT NULL , 
            `school_zip` VARCHAR(10) NOT NULL , 
            `school_date_added` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
            PRIMARY KEY (`school_ID`)
            ) ENGINE = InnoDB;";
  $result = $this->process_query($sql);
?>