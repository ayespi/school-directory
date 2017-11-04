<?php
require('../../__CONNECT/wmi-connect.php');
class School
{
  public $connection;
  public $database  = 'whollymath';
  public $table     = 'schools';
  public $id;
  public $name;
  public $address;
  public $city;
  public $state;
  public $zip;
  public $date_added;
  public $data;
  public $json;


  public function __construct($connection)
  {
    $this->connection = $connection;
    $this->create_table();
  }
  public function create_table()
  {
    include('../assets/sql/create_schools_table.php');
  }
  public function get_all()
  {
    include('../assets/sql/get_all_schools.php');
    if($result){
      return $this->get_data($result);
    }
  }

// *** Get Results Data ***
public function get_data($result)
{
  $this->data = array();
  while($row = mysqli_fetch_assoc($result))
  {
    $this->data[] = array(
          'id'          =>   $row['school_ID'],
          'name'        =>   $row['school_name'],
          'address'     =>   $row['school_address'],
          'city'        =>   $row['school_city'],
          'state'       =>   $row['school_state'],
          'zip'         =>   $row['school_zip'],
          'date_added'  =>   $row['school_date_added']
    );
  }
  $this->json = json_encode($this->data);
  return $this->data;
}

public function insert_data()
{
  // INSERT INTO `schools` (
  //   `school_ID`, 
  //   `school_name`, 
  //   `school_address`, 
  //   `school_city`, 
  //   `school_state`, 
  //   `school_zip`, 
  //   `school_date_added`
  //   ) VALUES (
  //     NULL, 
  //     'Woodstream Christian Academy', 
  //     '9800 Lottsford Road', 
  //     'Mitchellville', 
  //     'MD', 
  //     '20721', 
  //     CURRENT_TIMESTAMP
  //   ), (
  //     NULL, 
  //     'Grace Brethern Christian School', 
  //     '6501 Surratts Road', 
  //     'Clinton', 
  //     'MD', 
  //     '20735', 
  //     CURRENT_TIMESTAMP
  //   );

}
  // public function get_data($result)
  // {
  //   $rows = mysqli_num_rows($result);
  //   if($rows > 0){
  //     while($row = mysqli_fetch_assoc($result)){
  //       $this->data[] = array(
  //         'id'          =>   $row['school_ID'],
  //         'name'        =>   $row['school_name'],
  //         'address'     =>   $row['school_address'],
  //         'city'        =>   $row['school_city'],
  //         'state'       =>   $row['school_state'],
  //         'zip'         =>   $row['school_zip'],
  //         'date_added'  =>   $row['school_date_added']
  //       );
  //     }
  //   }else{
  //     $this->data = array(
  //       'id'          =>   $row['school_ID'],
  //       'name'        =>   $row['school_name'],
  //       'address'     =>   $row['school_address'],
  //       'city'        =>   $row['school_city'],
  //       'state'       =>   $row['school_state'],
  //       'zip'         =>   $row['school_zip'],
  //       'date_added'  =>   $row['school_date_added']
  //     );
  //   }
  //   $this->json = json_encode($this->data);
  //   return $this->data;
  // }



  public function process_query($sql)
  {
    return $result = mysqli_query($this->connection, $sql);
  }
}

?>