<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodoku Matematico</title>
    <link rel="stylesheet" href="estilo_multiplicar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<header>
    <?php include "header.php";?>
</header>
<body>
    <br>
<div>
    <div class="contenedor">
<h1>multiplicar</h1>
<table>
    <tr>
    <td class="no-contiene" id="0" ondrop="drop (event)" ondragover="allowDrop (event)"></td>
    <td class="contiene">*</td>
    <td class="contiene">2</td>
    <td class="contiene">=</td>
    <td class="contiene">18</td>
    </tr>
    <tr>
    <td class="contiene">5</td>
    <td class="contiene">*</td>
    <td class="no-contiene" id="1" ondrop="drop (event)" ondragover="allowDrop (event)"></td>
    <td class="contiene">=</td>
    <td class="contiene">25</td>
    </tr>
    <tr>
    <td class="contiene">3</td>
    <td class="contiene">*</td>
    <td class="no-contiene" id="2" ondrop="drop (event)" ondragover="allowDrop (event)"></td>
    <td class="contiene">=</td>
    <td class="contiene">12</td>
    </tr>
    <tr>
    <td class="no-contiene" id="3" ondrop="drop (event)" ondragover="allowDrop (event)"></td>
    <td class="contiene">*</td>
    <td class="contiene">8</td>
    <td class="contiene">=</td>
    <td class="no-contiene" id="4" ondrop="drop (event)" ondragover="allowDrop (event)"></td>
    </tr>
    <tr>
    <td class="contiene">3</td>
    <td class="contiene">*</td>
    <td class="contiene">*</td>
    <td class="contiene">=</td>
    <td class="contiene">*</td>
    </tr>
</table>
<br>    
<div class= "contenedor-alternativa">
    <div class="caja" draggable="true" ondragstart="drag (event)" id="a">4</div>
    <div class="caja" draggable="true" ondragstart="drag (event)" id="b">6</div>
    <div class="caja" draggable="true" ondragstart="drag (event)" id="c">5</div>    
    <div class="caja" draggable="true" ondragstart="drag (event)" id="d">9</div>
    <div class="caja" draggable="true" ondragstart="drag (event)" id="e">48</div>
</div>
<br>
<div class="marco">
<div class="tiempo" id="tiempo">00:00:00.000</div>
<div class="botones-contenedor">
<div class="btn" onclick="iniciar()">
<i class="fas fa-play"></i>
</div>
<div class="btn" onclick="pausar()">
<i class="fas fa-pause"></i>
</div>
<div class="btn" onclick="reiniciar()">
<i class="fas fa-undo-alt"></i>
</div>
</div>
</div>
<div class="resultado">
    <h2>respuesta</h2>
</div>

</div>
<br>

<script src="multiplicar.js"></script>
<script src="tiempo.js"></script>

</body>
</html>
