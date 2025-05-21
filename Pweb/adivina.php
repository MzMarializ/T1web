<?php require('Partes/head.php'); ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0fdf4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #4c9468;
        margin-top: 30px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 30px;
    }

    input[type="number"] {
        padding: 10px;
        width: 300px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #5da77a;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #4c9468;
    }

    h3 {
        text-align: center;
        margin-top: 20px;
        color: #333;
    }
</style>

<h1>Adivina el numero del 1 al 10</h1>
<form method="get" action="">
       <input type="number" name="txtc"  style="width: 300px;" required id="numero" min="1" max="10" placeholder="Escribe un numero del 1 al 10" 
       value="<?php if(isset($_GET['txtc'])) echo $_GET['txtc'];?>"/> 

       <button type="submit">Enviar</button>

<?php 
if(isset($_GET['txtc'])){
       $numero = $_GET['txtc'];
       $aleatorio = rand(1,10);
       if ($numero == $aleatorio){
              echo "<h3> Felicidades adivinaste el numero: $aleatorio </h3>";
       } else{ echo "<h3>  Lo siento mucho, perdiste el numero era : $aleatorio </h3>";
       }
}
?>
</form>

<?php require('Partes/foot.php'); ?>
