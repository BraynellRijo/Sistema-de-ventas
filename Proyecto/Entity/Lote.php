<?php

class Lote{
    public $IdLote;
    public $NombreProducto;
    public $CantidadProducto;
    public $CaducidadProducto;
    public $IdProveedor ;
    public $FechaCompra;
    public $Estado;

    function __construct($id, $nombre,$cantidad,$caducidad,$idProveedor,$fechaCompra, $estado) {
        $this->IdLote = $id;
        $this->NombreProducto = $nombre;
        $this->CantidadProducto = $cantidad;
        $this->CaducidadProducto = $caducidad;
        $this->IdProveedor = $idProveedor;
        $this->FechaCompra = $fechaCompra;  
        $this->Estado= $estado;
}
}
?>