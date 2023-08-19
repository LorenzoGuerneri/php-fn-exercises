<?php
function somma(&$numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        $val_temp = $numero;
        $numero--;
        return $val_temp + somma($numero);
    }
}

$numero = 10;
$risultato = somma($numero);

echo "Somma finale: " . $risultato . "\n";
echo "Valore della variabile: " . $numero . "\n";
?>



