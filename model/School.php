<?php
// require('../../__CONNECT/wmi-connect.php');
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
  public $image_url;
  public $date_added;
  public $current;
  public $previous;
  public $next;
  public $data;
  public $json;


  public function __construct($connection)
  {
    $this->connection = $connection;
    $this->create_table();
  }
// *** Check If ID Exists ***
  public function check_id_exists($id)
  {
    include('../../assets/sql/check_id_exists.php');
    if($result){
      return true;
    }
    return false;
  }
// *** Create Schools Table ***  
  public function create_table()
  {
    include('../../assets/sql/create_schools_table.php');
  }
// *** Get All Schools ***
  public function get_all()
  {
    include('../../assets/sql/get_all_schools.php');
    if($result){
      return $this->get_data($result);
    }
  }

// *** Get Results Data ***
  public function get_data($result)
  {
    $this->data = array();
    $rows = mysqli_num_rows($result);
    if($rows > 1){
      while($row = mysqli_fetch_assoc($result))
      {
        $this->data[] = array(
              'id'          =>   $row['school_ID'],
              'name'        =>   $row['school_name'],
              'address'     =>   $row['school_address'],
              'city'        =>   $row['school_city'],
              'state'       =>   $row['school_state'],
              'zip'         =>   $row['school_zip'],
              'image_url'   =>   $row['school_image_url'],
              'date_added'  =>   $row['school_date_added']
        );
      }
    }else{
      $row = mysqli_fetch_assoc($result);
      $this->data = array(
        'id'          =>   $row['school_ID'],
        'name'        =>   $row['school_name'],
        'address'     =>   $row['school_address'],
        'city'        =>   $row['school_city'],
        'state'       =>   $row['school_state'],
        'zip'         =>   $row['school_zip'],
        'image_url'   =>   $row['school_image_url'],
        'date_added'  =>   $row['school_date_added']
      );
    }

    $this->json = json_encode($this->data);
    return $this->data;
  }
// *** Get First ID ***
  public function get_first_id()
  {
    include('../../assets/sql/get_first_id.php');
    if($result){
      $row = mysqli_fetch_assoc($result);
      return $row['school_ID'];
    }
  }
// *** Get ID - First ***
  public function get_id_first()
  {
    return $this->get_first_id();
  }
// *** Get ID - Last ***
  public function get_id_last()
  {
    include('../../assets/sql/get_id_last.php');
    if($result){
      $row = mysqli_fetch_assoc($result);
      return $row['school_ID'];
    }

  }

// *** Get Results For One ***
  public function get_one($result)
  {
    $row = mysqli_fetch_assoc($result);
    
      $this->data = array(
            'id'          =>   $row['school_ID'],
            'name'        =>   $row['school_name'],
            'address'     =>   $row['school_address'],
            'city'        =>   $row['school_city'],
            'state'       =>   $row['school_state'],
            'zip'         =>   $row['school_zip'],
            'image_url'   =>   $row['school_image_url'],
            'date_added'  =>   $row['school_date_added']
      );
    
    $this->json = json_encode($this->data);
    return $this->data;
  }

// *** Get One School ***
  public function get_one_by_id($id)
  {
    include('../../assets/sql/get_one_school_by_id.php');
    if($result){
      return $this->get_one($result);
    }
  }
// *** Goto Next ***
  public function get_next_id($id)
  {
    $current  = $id;
    $next     = $current + 1;

    return $next;

  }
// *** Goto Previous ***
  public function get_prev_id($id)
  {
    $current  = $id;
    $prev     = $current - 1;
    
    return $prev;
  }
// *** Get Row Number***
  public function get_rows()
  {
    include('../../assets/sql/get_all_schools.php');
    if($result){
      return $rows = mysqli_num_rows($result);
    }
  }  
// *** Insert School ***
  public function insert($params)
  {
    $this->set_params($params);
    include('../../assets/sql/insert_school.php');
  }
// *** Process Query ***
  public function process_query($sql)
  {
    return mysqli_query($this->connection, $sql);
  }
// *** Set Params ***
  public function set_params($params)
  {
    $this->name       = $params['name'];
    $this->address    = $params['address'];
    $this->city       = $params['city'];
    $this->state      = $params['state'];
    $this->zip        = $params['zip'];
    $this->image_url  = $params['image_url'];
  }  

  // *** Set Params - Update***
  public function set_params_u($params)
  {
    $this->id         = $params['id'];
    $this->name       = $params['name'];
    $this->address    = $params['address'];
    $this->city       = $params['city'];
    $this->state      = $params['state'];
    $this->zip        = $params['zip'];
    $this->image_url  = $params['image_url'];
  }  
  // *** Update School ***
  public function update()
  {
    include('../../assets/sql/update_school.php');
    // prewrap($sql);
  }

}
?>