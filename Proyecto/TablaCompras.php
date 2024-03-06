<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos del Cliente</title>
    <link rel="stylesheet" href="assets/Css/TablaCompras.css"> <!-- Ajusta la ruta según tu archivo CSS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</head>
<body>
    <div class="container-compras">
        <div class="headerTable">

            <!-- Formulario para enviar el ID del cliente a través de AJAX -->
            <form id="ComprasForm" method="POST" action="" class="ConsultaTable">
                <input type="text" name="Compra_id" id="Compra_id" placeholder="Ingrese el ID del Cliente" autocomplete="off">

                <!-- Botón para enviar el formulario -->
                <button type="submit" class="btnConsultar">Consultar Cliente</button>
            </form>

            <!-- Formulario para eliminar cliente -->
            <form id="eliminarComprasForm" method="POST" action="ConexionDB.php" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este cliente?');">
                <input type="text" name="IdDelete" id="IdDelete" placeholder="Ingrese el ID del Cliente a ser eliminado" autocomplete="off">
                <input type="submit" value="Eliminar" name="eliminardatos" id="btnEliminar">
            </form>
        </div>
        
        <table id="data-table">
            <thead>
                <tr>
                    <th>ID del Cliente</th>
                    <th>Nombre y Apellido</th>
                    <th>Género</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                </tr>
            </thead>
            <tbody id="tablaDatos">
                <?php $output?>
            </tbody>
        </table>
    </div>

    <!-- Importar jQuery (puedes cambiarlo por una versión local si prefieres) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
    <script>
        $(document).ready(function() {
            // Cuando se envíe el formulario, hacer la petición AJAX
            $('#ComprasForm').submit(function(e) {
                e.preventDefault(); // Evitar que se recargue la página
                var CompraId = $('#Compra_id').val(); // Obtener el ID del cliente del campo de entrada
                $.ajax({
                    type: 'POST',
                    url: 'ConexionDB.php', // Archivo PHP que manejará la petición
                    data: { Compra_id: CompraId }, // Datos a enviar al servidor
                    success: function(data) {
                        // Actualizar el contenido de la tabla con los datos recibidos del servidor
                        $('#tablaDatos').html(data);
                    }
                });
            });
        });
    </script> 


</body>
</html>

<?php 
include('ConexionDB.php');
?>