<?php 


require_once 'model/Tblventas_model.php';
require_once 'model/Tblproductos_model.php';
require_once 'model/Tblcategorias_model.php';

class Tblventas_controller{

    private $model_productos;
    private $model_categorias;
    private $model_ventas;


    public function __construct(){
        $this->model_productos = new Tblproductos_model();
        $this->model_categorias = new Tblcategorias_model();
        $this->model_ventas = new Tblventas_model();

    }

    public function menuVentas(){


        $consultaCategorias = $this->model_categorias->consultarCategorias();
        $consultaProductos = $this->model_productos->consultarProductos();
        $consultaVentas == $this->model_ventas->consultaVenta();
        require_once 'view/menuVentas.php';
    }


}




?>