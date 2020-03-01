<?php 


class Tblcategorias_model{

 private $bd;
 private $tblcategorias;

 public function __construct(){

    $this->bd = Conexion :: getConexion();
    $this->tblcategorias = array();

 }

  public function insertarCategoria($dato){

 $nombre = $dato['nombre'];
 $consulta ="INSERT INTO tblcategorias (nombre) VALUES ('$nombre')";
 mysqli_query($this->bd, $consulta) or die ("Error al insertar la categoria");

 }

 public function consultarCategorias(){

      $consulta = $this->bd->query("SELECT * FROM tblcategorias");
    while($fila = $consulta->fetch_assoc()){

        $this->tblcategorias[] = $fila;
    }
    return $this->tblcategorias;

 }

 public function consultarCategoriasPorId($accion_sql){
     $consulta = $this->bd->query($accion_sql);
     $fila = $consulta->fetch_assoc();
     $this->tblcategorias[] = $fila;
     return $this->tblcategorias;

 }


 public function actualizarCategoria($dato){
   $nombre = $dato['nombre'];
   $consulta = "UPDATE tblcategorias SET nombre = '$nombre' WHERE id=$id";
   mysqli_query($this->bd, $consulta) or die ("Error al actualizar la categoria");

 }




}




?>