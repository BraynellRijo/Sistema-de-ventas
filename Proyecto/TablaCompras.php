
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos del Cliente</title>
    <link rel="stylesheet" href="assets/Css/TablaCompras.css"> <!-- Ajusta la ruta según tu archivo CSS -->
    <link rel="stylesheet" href="assets/Css/menuV.css">
    <link rel="stylesheet" href="assets/Css/modal.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <style>
        
    </style>
</head>
<body>
    <?php include 'menuV.php'; ?>
    <div class="container-compras">
        <div class="headerTable">

            <form id="ComprasForm" method="POST" action="" class="ConsultaTable">

                    <input type="text" name="input_id" id="input_id" placeholder="Ingrese el ID de la compra" autocomplete="off">
                
                <button type="submit" class="btnConsultar" name="btn_Consultar"><ion-icon name="search-outline" class="iconConsulta"></ion-icon></button>
            </form>

        <button class="btnAgregar"><a href="./agregar.php">Agregar</a></button>
        </div>
        
        <table id="data-table">
                <?php
                include('ConexionDB.php');
                
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Compra_id']) && !empty($_POST['Compra_id'])) {
                    $Idc = $_POST['Compra_id'];
                    $QueryCompras = "SELECT * FROM compras WHERE IdCompra = $Idc";
                    $resultado = mysqli_query($conn, $QueryCompras);
                } else {
                    // Si no se ha enviado un ID de compra, mostrar todos los resultados
                    $QueryCompras = "SELECT * FROM compras";
                    $resultado = mysqli_query($conn, $QueryCompras);
                }
                
                if (mysqli_num_rows($resultado) > 0) {
                    echo "<thead><tr>";
                    while ($fieldinfo = mysqli_fetch_field($resultado)) {
                        echo "<th>" . $fieldinfo->name . "</th>";
                    }
                    echo "<th>Acciones</th></tr></thead>";
                
                    while ($Compras = mysqli_fetch_array($resultado)) {
                ?>
                <tbody id="tablaDatos">
                 <tr>
                    <td> <?php echo $Compras['IdCompra'];?> </td>
                    <td> <?php echo $Compras['IdProveedor'];?> </td>
                    <td> <?php echo $Compras['NombreProveedor'];?> </td>
                    <td> <?php echo $Compras['IdProducto'];?> </td>
                    <td> <?php echo $Compras['NombreProducto'];?> </td>
                    <td> <?php echo $Compras['FechaCompra'];?> </td>
                    <td> <?php echo $Compras['CantidadProducto'];?> </td>
                    <td> <?php echo $Compras['IdLote'];?> </td>
                    <td> <?php echo $Compras['Estado'];?> </td>
                    <td> <?php echo $Compras['CostoTotal'];?> </td>
                    <td class="acciones"> 
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <ion-icon name="pencil-sharp"class="btnEditar"></ion-icon>
                    </button>
                        <ion-icon name='trash-outline' class='btnEliminar'></ion-icon> 
                    </td>
                </tr>
                    <?php include('./modal.php');?>
                <?php 
                }    
                }else {
                        echo "No se encontraron datos para mostrar.";
                    }

                    if($existe == 0)
                    echo"El  ID no existe en la base de datos<br>";
                
                     ?>
            </tbody>
        </table>
    </div>


</body>

    <!-- Importar jQuery (puedes cambiarlo por una versión local si prefieres) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
    <script>
        $(document).ready(function() {
            // Cuando se envíe el formulario, hacer la petición AJAX
            $('#ComprasForm').submit(function(e) {
                e.preventDefault(); // Evitar que se recargue la página
                var CompraId = $('#input_id').val(); // Obtener el ID del cliente del campo de entrada
                $.ajax({
                    type: 'POST',
                    url: 'ConexionDB.php', // Archivo PHP que manejará la petición
                    data: { input_id: CompraId }, // Datos a enviar al servidor
                    success: function(data) {
                        // Actualizar el contenido de la tabla con los datos recibidos del servidor
                        $('#tablaDatos').html(data);
                    }
                });
            });
        });
    </script> 
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        
        <!-- Modal -->
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

</html>