<?php

// Incluye el archivo de conexión a la base de datos

class Ventas {
    public $IdVenta;
    public $IdProducto;
    public $NombreProducto;
    public $CantidadVendida;
    public $ITBIS;
    public $MontoTotal;
    public $IdCliente;
    public $NombreCliente;
    public $IdVendedor;

    public static $conn = null;

    public static function getVentas() {
        if (self::$conn === null) {
            include '../ConexionDB.php';
            self::$conn = $conn;
        }
        // Prepara la sentencia SQL
        $stmt = self::$conn->prepare("SELECT * FROM ventas");
        // Ejecuta la sentencia SQL
        $stmt->execute();

        $ventas = [];

        while ($row = $stmt->fetch()) {
            $venta = new Ventas();

            $venta->IdVenta = $row["IdVenta"];
            $venta->IdProducto = $row["IdProducto"];
            $venta->NombreProducto = $row["NombreProducto"];
            $venta->CantidadVendida = $row["CantidadVendida"];
            $venta->ITBIS = $row["ITBIS"];
            $venta->MontoTotal = $row["MontoTotal"];
            $venta->IdCliente = $row["IdCliente"];
            $venta->NombreCliente = $row["NombreCliente"];
            $venta->IdVendedor = $row["IdVendedor"];

            $ventas[] = $venta;
        }

        return $ventas;
    }
}


?>