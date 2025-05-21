<?php 
$nombre = "Marializ";
$apellido = "Disla";
$edad = 20;
$carrera = "Desarrollo de software";
$universidad = "ITLA";

$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";

require('Partes/head.php'); 
?>

<style>
    table {
        margin: 40px auto;
        border-collapse: collapse;
        width: 60%;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
    }

    th {
        background-color: #7ecf8f;
        color: white;
        width: 30%;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .mensaje {
        text-align: center;
        font-size: 18px;
        margin-top: 20px;
        color: #333;
    }
</style>

<table>
    <tr>
        <th>Nombre</th><td><?php echo $nombre; ?></td>
    </tr>
    <tr>
        <th>Apellido</th><td><?php echo $apellido; ?></td>
    </tr>
    <tr>
        <th>Edad</th><td><?php echo $edad; ?></td>
    </tr>
    <tr>
        <th>Carrera</th><td><?php echo $carrera; ?></td>
    </tr>
    <tr>
        <th>Universidad</th><td><?php echo $universidad; ?></td>
    </tr>
</table>

<p class="mensaje"><?php echo $mensaje; ?></p>

<?php require('Partes/foot.php'); ?>
