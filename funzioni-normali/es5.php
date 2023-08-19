<?php
function riempiElencoAlunni($alunniAttuali, ...$alunniNuovi) {
    foreach ($alunniNuovi as $alunnoNuovo) {
        array_push($alunniAttuali, $alunnoNuovo);
    }
    return $alunniAttuali;
}

$alunni = array("Martina", "Agostino");
$alunni = riempiElencoAlunni($alunni, "Elisa", "Lorenzo", "Luca");

echo "Elenco degli alunni:<br><br>";
foreach ($alunni as $posizione => $alunno) {
    echo "Alunno " . ($posizione + 1) . ": $alunno<br>";
}
