<?php
class QueryClas{
  public $Query;
  public function select($val)
  {
    $this->Query = "SELECT $val";
    return $this;
  }  
  public function from($tbl)
  {
    $this->Query .= " FROM $tbl";
    return $this;
  }  
  public function where($id)
  {
    $this->Query .= " WHERE userid = $id";
    return $this;
  }  
}
$D = new QueryClas();
// echo $Q = $D -> select('*') -> Query;
// echo $Q = $D -> select("uername,password") -> Query;
// $Q = $D -> select("uername,password")->from("users");
// print_r($Q->Query);
echo $Q = $D -> select("*")->from("users") ->where(45)-> Query;
// echo $Q = $D -> select("*")->from("users") ->where(5)-> Query;
?>
