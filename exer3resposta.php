<?php

if(isset($_POST["numeros"]) && isset($_POST["valor"])) {
    $numero = $_POST["numeros"];
    $valor = $_POST["valor"];
    
    foreach($numero as $n) {
        $multiplicacao = $n * $valor;
        echo "<p> $n * $valor = $multiplicacao </p>";
    }
}

?>