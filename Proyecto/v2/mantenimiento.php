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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Idc = $_POST['cliente_id'];

    $sql = "SELECT * FROM clientes WHERE IdCliente = $Idc";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        // Construir la tabla HTML con los datos del cliente
        $output = "";
        while ($cliente = mysqli_fetch_assoc($resultado)) {
            $output .= "<tr>";
            $output .= "<td>" . $cliente['IdCliente'] . "</td>";
            $output .= "<td>" . $cliente['NombreApellido'] . "</td>";
            $output .= "<td>" . $cliente['Genero'] . "</td>";
            $output .= "<td>" . $cliente['FechaNacimiento'] . "</td>";
            $output .= "<td>" . $cliente['Telefono'] . "</td>";
            $output .= "<td>" . $cliente['CorreoElectronico'] . "</td>";
            $output .= "</tr>";
        }
        echo $output; // Enviar la tabla HTML al cliente
    } else {
        echo "No se encontraron datos para mostrar.";
    }
}

// Cerrar conexión
$conn->close();
?>

