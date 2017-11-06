<?php 
require('../../model/School.php');
class SchoolsController
{
  public $connection;
  public $database;
  public $table;
  public $School;

  public function __construct($connection)
  {
    $this->connection = $connection;
    $this->School = new School($this->connection);
  }

  public function Index()
  {
    return $this->School->get_all();
  }

  public function Show($id)
  {
    return $this->School->get_one_by_id($id);
  }

  public function _New($params)
  {
    $this->Create($params);
  }

  public function Edit($id)
  {
    $this->Update($params);
  }

  public function Create($params)
  {
    // $this->School->set_params($params);
    $this->School->insert($params);
  }

  public function Update($params)
  {
    $this->School->set_params_u($params);
    $this->School->update();
  }

  public function Delete($id)
  {
    $this->School->destroy($id);
  }

}
?>