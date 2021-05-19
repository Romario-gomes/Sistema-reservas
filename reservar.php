<?php 
    require 'config.php';
    require 'classes/carros.class.php';
    require 'classes/reservas.class.php';

    $reserva = new Reservas($pdo);
    $carro = new Carros($pdo);

?>
<h1>Adicionar Reserva</h1>

<form method="POST">
    Carro:<br/>
    <select name="carro">
    
    </select><br><br>

    Data de inicio:<br>
    <input type="text" name="data_inicio"> <br><br>

    Data fim:<br>
    <input type="text" name="data_fim"> <br><br>

    Seu nome: <br>
    <input type="text" name="pessoa"><br><br>
    <input type="submit" value="Reservar">
</form>