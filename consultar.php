<?php
// Datos de conexión a la base de datos
$host = "localhost";
$db_user = "visr";
$db_password = "unadm2024.";
$db_name = "visr";

// Establecer conexión con la base de datos
$conexion = mysqli_connect($host, $db_user, $db_password, $db_name);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consultar los datos de la tabla personas
$sql = "SELECT * FROM personas";
$resultado = mysqli_query($conexion, $sql);

// Crear la tabla HTML para mostrar los datos
 echo '<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>


<div class="container">
<h2>Datos de la Tabla Personas</h2>
<table border="1" class="table">
<tr><th>Nombre</th><th>EdadBoletos</th><th>Ciudad</th></tr>';



while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['boletos']."</td>";
    echo "<td>".$fila['ciudad']."</td>";
    echo "</tr>";
}

echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>