<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "marketflydb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}



// Verificar si se ha enviado una solicitud POST y se ha hecho clic en el botón de eliminación
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['eliminardatos'])) {
    // Obtener el ID del cliente a eliminar desde el formulario
    $IdDelete = $_POST['IdDelete'];
    
    // Preparar la consulta para eliminar el cliente de la tabla
    $sqleliminar = "DELETE FROM compras WHERE IdCompra = $IdDelete";
    
    // Ejecutar la consulta
    if ($conn->query($sqleliminar) === TRUE) {
        echo "<h1>Se a eliminado correctamente</h1>";
        echo "<script>setTimeout(function() { window.location.replace(document.referrer); }, 5000);</script>"; // Redirigir a la página anterior después de 5 segundos
    } else {
        // Si ocurre un error al eliminar, muestra un mensaje
        echo "Error al eliminar la compra: " . $conn->error;
    }
}


?>