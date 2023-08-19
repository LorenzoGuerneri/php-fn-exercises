<?php
function areaTriangolo($base, $altezza) {

    if (!is_numeric($base) || !is_numeric($altezza)) {
        return "Entrambi i valori devono essere numeri.";
    }

    $area = ($base * $altezza)/2;
    return $area;
}

echo "Area del triangolo con base 5 e altezza 10: " . areaTriangolo(5, 10) . "<br>";
echo "Area del triangolo con base 2.5 e altezza 7.6: " . areaTriangolo(2.5, 7.6);
?>
