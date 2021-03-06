<?php 

require_once 'model/Tblcategorias_model.php';

class Tblcategorias_controller{

  private $model_categorias;
  
   public function __construct(){

    $this->model_categorias = new Tblcategorias_model();

   }

   public function menuCategorias(){

     $consulta = $this->model_categorias->consultarCategorias();
     require_once 'view/menuCategorias.php';

   }

   public function guardarCategoria(){

     $dato['nombre'] = $_POST["txtnombre"];
     $this->model_categorias->insertarCategoria($dato);
     $this->menuCategorias();
   }


  public function modificar(){
     $id = $_REQUEST['id'];
     $consulta = $this->model_categorias->consultarCategoriasPorId("SELECT * FROM tblcategorias where id=$id");
     require_once 'view/tblcategorias_modificar.php';

   }

   public function guardarCambiosCategoria(){
      $dato['nombre'] = $_POST["txtnombre"];
      $this->model_categorias->actualizarCategoria($dato);
      $this->tblcategorias_modificar();

   }

}



?>