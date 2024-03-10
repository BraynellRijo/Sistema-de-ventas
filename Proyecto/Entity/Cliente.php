<?php

class Cliente{
    public $IdCliente ;
    public $NombreApellido;
    public $Genero;
    public $FechaNacimiento;
    public $Telefono;
    public $CorreoElectronico;
    public $TarjetaCredito;
    public $TarjetaDebito;

    function __construct($id, $nombre,$genero,$fecha,$telefono,$correo,$tarjetacredito, $tarjetadebito) {
        $this->IdCliente = $id;
        $this->NombreApellido = $nombre;
        $this->Genero =$genero;
        $this->FechaNacimiento = $fecha;
        $this->Telefono = $telefono;
        $this->CorreoElectronico = $correo;
        $this->TarjetaCredito=$tarjetacredito;  
        $this->TarjetaDebito= $tarjetadebito;
}
}
?>