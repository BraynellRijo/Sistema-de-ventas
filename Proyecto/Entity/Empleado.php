<?php

class Empleado{
    public $IdEmpleado;
    public $NombreApellido;
    public $FechaNacimiento;
    public $Cargo;
    public $Encargado;
    public $FechaIncorporacion;
    public $Sueldo;

    function __construct($id, $nombre,$fecha,$cargo,$encargado,$FechaIncorp, $sueldo) {
        $this->IdEmpleado = $id;
        $this->NombreApellido = $nombre;
        $this->FechaNacimiento = $fecha;
        $this->Cargo = $cargo;
        $this->Encargado = $encargado;
        $this->FechaIncorporacion = $FechaIncorp;  
        $this->Sueldo= $sueldo;
}
}
?>