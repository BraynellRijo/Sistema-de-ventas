<?php

class Inventario{
    public $IdProducto;
    public $NombreProducto;
    private $CantidadProducto;
    public $IdLote;    
    public $Estado;
    
    function __construct($IdProducto, $NombreProducto, $CantidadProducto, $IdLote, $Estado){
        $this->IdProducto = $IdProducto;
        $this->NombreProducto = $NombreProducto;
        $this->CantidadProducto=$CantidadProducto;
        $this->IdLote= $IdLote; 
        $this->Estado = $Estado;
    }


    public function getCantidad()
    {
        return $this->CantidadProducto;
    }

    public function addCantidad($cantidad){
        $this->CantidadProducto +=$cantidad;
    }

    public function setCantidad($Cantidad)
    {
        $this->CantidadProducto = $Cantidad;
        return $this;
    }


    
}

?>