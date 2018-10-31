<head>
        <meta charset="UTF-8">
        <title>Provamt</title>
    </head>
    <body>
        <?php
$matriz1 = array
    (
    array(1,2,3),
    array(4,5,6)
);
$matriz2 = array
    (
    array(1,2,3),
    array(8,5,10)
  
);
function GeraTabela($matriz1) {
    $numeroLinhas = count($matriz1);
    $numeroColunas = count($matriz1[0]);
    echo "<table border=1>
                   <table border=1>";
    for ($i = 0; $i < $numeroLinhas; $i++) {
        echo "</tr>";
        echo "<tr>";
        for ($j = 0; $j < $numeroColunas; $j++) {
            echo "<td> ". $matriz1[$i][$j] . "</td>";
        }
    }
    
    echo "<br>";
}
function soma($matriz1, $matriz2) {
    $copia = $matriz1;
    $numeroLinhas = count($matriz2);
    $numeroColunas = count($matriz2[0]);
    for ($i = 0; $i < $numeroLinhas; $i++) {
       for ($j = 0; $j < $numeroColunas; $j++) {
           $copia[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
       }
        }
         return $copia;
    }
    
  
$va = soma($matriz1, $matriz2);
GeraTabela($va);