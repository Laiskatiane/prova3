<?php
$numeros = array
    (
    array(1, 2, 3),
    array(5, 6, 7),
    
);
$numeros2 = array
    (
    array(1, 2, 3),
    array(4, 6, 9),
);

function ExibeNumeros($numeros) {
    $linhas = count($numeros);
    $colunas = count($numeros[0]);
    echo "<table border=1>
                   <table border=1>";
    for ($i = 0; $i < $linhas; $i++) {
        echo "</tr>";
        echo "<tr>";
        for ($j = 0; $j < $colunas; $j++) {
            echo "<td>" .$numeros[$i][$j]. "</td>";
        }
    }
    echo "<br>";
}
ExibeNumeros($numeros);

function  ZeraDiagonslP($numeros){
    $copia = $numeros;
 for ($i = 0; $i < 3; $i++) {
                   
        for ($j = 0; $j < 3; $j++) {
            if($i == $j){
                $copia[$i][$j] = 0; 
            }   
        }
    }
 return $copia;
}

function  ZeraDiagonslS($numeros){
    $copia2 = $numeros;
 for ($i = 0; $i < 3; $i++) {
                   
        for ($j = 0; $j < 3; $j++) {
            if($j == count($numeros) - 1 - $i){
                $copia2[$i][$j] = 0; 
            }   
        }
    }
 return $copia2;
}

$resultado = ZeraDiagonslP($numeros);
ExibeNumeros($resultado);


$resultado2 = ZeraDiagonslS($numeros);
ExibeNumeros($resultado2);


?>