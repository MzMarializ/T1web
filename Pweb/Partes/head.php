<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea1</title>
</head>
<body>
    <h1>Inicio </h1>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0fdf4;
}

h1 {
    text-align: center;
    background-color: #7ecf8f;
    color: white;
    padding: 20px 0;
    margin: 0;
}

hr {
    border: none;
    border-top: 3px solid #7ecf8f;
    margin: 0;
}

#T1 {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

#menu {
    background-color: #5da77a;
}

#menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    background-color: #5da77a;
}

#menu li {
    margin: 0;
}

#menu a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

#menu a:hover {
    background-color: #4c9468;
}

#contenido {
    flex: 1;
    padding: 20px;
    background-color: white;
    min-height: 300px;
}

#divFooter {
    text-align: center;
    background-color: #7ecf8f;
    color: white;
    padding: 15px 0;
}
</style>
    <hr>
    <div id="T1">
        <div id="menu">
            <ul>
                <li>
                    <a href="tarjeta.php">Tarjeta</a>
                </li>
                <li>
                     <a href="calculadora.php">Calculadora</a>
                </li>
                <li>
                    <a href="adivina.php">Adivina</a>
                </li>
                <li>
                     <a href="acercade.php">Acerca de</a>
                </li>
           </ul>
        </div>