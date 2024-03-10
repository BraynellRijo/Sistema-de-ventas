<?php

class Compras{
    private $table = 'compras';
    public $IdCompra;
    public $IdProducto;
    public $NombreProducto;
    public $IdProveedor;
    public $FechaCompra;
    public $CantidadCompra;
    public $IdLote;
    public $Estado;
    public $CostoTotal;
    

    function __construct($IdCompra, $IdProducto, $NombreProducto, $IdProveedor, $FechaCompra, $CantidadCompra, $IdLote, $Estado, $CostoTotal){
        $this->IdCompra = $IdCompra;
        $this->IdProducto = $IdProducto; 
        $this->NombreProducto = $NombreProducto; 
        $this->IdProveedor = $IdProveedor; 
        $this->FechaCompra = $FechaCompra; 
        $this->CantidadCompra = $CantidadCompra; 
        $this->IdLote = $IdLote; 
        $this->Estado = $Estado; 
        $this->CostoTotal = $CostoTotal; 
    }

    public function getAll(){

        include 'ConexionDB.php';
        $existe = 0;

        if(isset($_POST(['btn_Consultar']))){
                
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input_id']) && !empty($_POST['input_id'])) {
                    $Idc = $_POST['input_id'];
                    $QueryCompras = "SELECT * FROM compras WHERE IdCompra = $Idc";
                    $resultado = mysqli_query($conn, $QueryCompras);
                } else {
                    $QueryCompras = "SELECT * FROM compras";
                    $resultado = mysqli_query($conn, $QueryCompras);
                }
                
                if (mysqli_num_rows($resultado) > 0) {
                    while ($Compras = mysqli_fetch_array($resultado)) {
                ?>
                 <tr>
                    <td> <?php $Compras['IdCompra']?> </td>
                    <td> <?php $Compras['IdProveedor']?> </td>
                    <td> <?php $Compras['IdProducto']?> </td>
                    <td> <?php $Compras['NombreProducto']?> </td>
                    <td> <?php $Compras['FechaCompra']?> </td>
                    <td> <?php $Compras['CantidadProducto']?> </td>
                    <td class="acciones"> 
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <ion-icon name="pencil-sharp"class="btnEditar"></ion-icon>
                    </button>
                        <ion-icon name='trash-outline' class='btnEliminar'></ion-icon> 
                    </td>
                </tr>
            <?php include('modal.php');?>
                <?php $existe++; 
                }    
                }else {
                        echo "No se encontraron datos para mostrar.";
                    }

                    if($existe == 0)
                    echo"El  ID no existe en la base de datos<br>";
                
        }
    }
}

?>
