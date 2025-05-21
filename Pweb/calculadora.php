<?php require('Partes/head.php'); ?>

<style>
    .inputx {
        margin: 10px;
    }

    .inputx label {
        display: inline-block;
        width: 150px;
    }

    .inputx input,
    .inputx select {
        padding: 5px;
        width: 200px;
    }

    .inputx button {
        padding: 5px 10px;
        color: white;
        background-color: #5da77a;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .inputx button:hover {
        background-color: #4c9468;
    }

    h2 {
        text-align: center;
        margin-top: 20px;
    }

    .resultado {
        text-align: center;
        font-size: 18px;
        margin-top: 20px;
        color: #333;
    }
</style>

<form method="get">
    <h2>Calculadora</h2>

    <div class="inputx">
        <label>Primer número:</label>
        <input type="number" name="n1" required />
    </div>

    <div class="inputx">
        <label>Segundo número:</label>
        <input type="number" name="n2" required />
    </div>

    <div class="inputx">
        <label>Operación:</label>
        <select name="operaciones" required>
            <option value="">Seleccione una operación</option>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
    </div>

    <div class="inputx">
        <button type="submit">Calcular</button>
    </div>
</form>

<?php
if (isset($_GET['n1'], $_GET['n2'], $_GET['operaciones'])) {
    $n1 = floatval($_GET['n1']);
    $n2 = floatval($_GET['n2']);
    $op = $_GET['operaciones'];
    $resultado = "";

    switch ($op) {
        case "suma":
            $resultado = $n1 + $n2;
            break;
        case "resta":
            $resultado = $n1 - $n2;
            break;
        case "multiplicacion":
            $resultado = $n1 * $n2;
            break;
        case "division":
            if ($n2 != 0) {
                $resultado = $n1 / $n2;
            } else {
                $resultado = "Error: No se puede dividir por cero.";
            }
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }

    echo "<div class='resultado'><strong>Resultado:</strong> " . $resultado . "</div>";
}
?>

<?php require('Partes/foot.php'); ?>
