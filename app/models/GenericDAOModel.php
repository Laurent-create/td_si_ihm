<?php
namespace app\models;

use Flight;
use PDO;

class GenericDAOModel
{

  private $db;
  private $prefix;
  private $table_name;
  private $primary_column_name;
  public function __construct($db, $table_name, $primary_column_name)
  {
    $this->db = $db;
    $this->table_name = $table_name;
    $this->primary_column_name = $primary_column_name;
  }

  public function getById($id)
  {
    $query="SELECT * FROM {$this->table_name} WHERE  {$this->primary_column_name} = ?";
    $stmnt= $this->db->prepare($query);
    $stmnt->execute([$id]);
    $result=$stmnt->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
  public function select($conditions,$values)
  {
    
    $query="SELECT * FROM {$this->table_name} ";
    if($conditions!="")
    {
      $query.=" WHERE $conditions";
    }
    $stmnt=$this->db->prepare($query);
    $stmnt->execute($values);
    $result=$stmnt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
  public function insert($data)
  {
    $columns = implode(',', array_keys($data));
    $placeholders = ":" . implode(', :', array_keys($data));
    $query = "INSERT INTO {$this->table_name} ($columns) VALUES ($placeholders)";
    $stmnt = $this->db->prepare($query);
    $stmnt->execute($data);
  }
  public function update($data, $id)
  {
    $columns = array_keys($data);
    $placeholders = "";
    for ($i = 0; $i < count($columns); $i++) {
      if ($i != 0) {
        $placeholders = $placeholders . ",";
      }
      $placeholders = $placeholders . " $columns[$i] = :$columns[$i]";
    }
    $query = "UPDATE {$this->table_name} SET $placeholders WHERE {$this->primary_column_name} = $id ";
    $result = $this->db->prepare($query);
    $result->execute($data);
  }
  public function delete($id)
  {
    $query="DELETE FROM {$this->table_name} WHERE {$this->primary_column_name} = ?";
    $stmnt=$this->db->prepare($query);
    $stmnt->execute([$id]);
  }
}
