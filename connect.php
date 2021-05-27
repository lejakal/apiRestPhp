<?php



class Conexion{


  private $datos = array(
    "host" => "localhost",
    "user" => "root",
    "pass" => "",
    "db" => "ospostco_demo"
  );

  private $con;
  
  public function __construct(){
    $this->con = new mysqli($this->datos['host'], 
      $this->datos['user'], $this->datos['pass'],
      $this->datos['db']);
  }

  public function Simple($sql){
    try {
      $dato = $this->con->query($sql);
      return mysqli_insert_id($this->con);
    } catch (Exception $e) {
     echo "Lo siento ocurrio un error simple";
   }

 }


 public function Retorno($sql){
  try {
    $datos = $this->con->query($sql);
    return $datos;
  } catch (Exception $e) {
   echo "Lo siento ocurrio un error Retorno";
 }
}


public function ultimo_id(){
  return mysqli_insert_id($this->con);
}

}
$conexion = new Conexion;
?>
