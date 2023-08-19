<?php
$num1 = 0;
$num2 = 1;
function fibonacci($num1, $num2) {
    for ($i = 0; $i < 10; $i++) {
        $num3 = $num1 + $num2;
        echo "$num3 ";
        $num1 = $num2;
        $num2 = $num3;
    }
}

fibonacci($num1, $num2);

echo "\n";
?>
