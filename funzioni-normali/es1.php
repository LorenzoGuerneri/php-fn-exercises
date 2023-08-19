<?php
    function testa_o_croce() {
        $risultato = rand(0, 1) === 0 ? "Testa" : "Croce";
        return $risultato;
    }
    echo 'Il risultato è: ' . testa_o_croce();


?>
