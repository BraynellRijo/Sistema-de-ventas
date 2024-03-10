<?php

class Empleado{
    public $IdProveedor ;
    public $RNC;
    public $Nombre;
    public $Direccion;
    public $Telefono;
    public $CorreoElectronico;

    function __construct($id, $rnc, $nombre, $direccion, $telefono, $correo) {
        $this->IdProveedor  = $id;
        $this->RNC = $rnc;
        $this->Nombre = $nombre;
        $this->Direccion = $direccion;
        $this->Telefono = $telefono;
        $this->CorreoElectronico = $correo;  
}
}
?>