<?php 


class Tblventas_model{

  private $bd;
  private $tblventas;

  public function __construct(){

     $this->bd = Conexion :: getConexion();
     $this->tblventas = array();
  }

  public function insertarVenta($dato){
    
    $cantidad = $dato['cantidad'];
    $consulta = "INSERT INTO tblventas (cantidad) VALUES ('$cantidad')";
    mysqli_query($this->bd, $consulta) or die ("Error al insertar la venta");


  }

 
  public function consultaVenta(){
     $consulta = $this->bd->query("SELECT cantidad FROM tblventas");
     while($fila = $consulta->fetch_assoc()){

      $this->tblventas[] = $fila;
     }
     return $this->tblventas;
 }




}




?>