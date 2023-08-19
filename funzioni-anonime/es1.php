

<!DOCTYPE html>
<html>
<head>
    <title>Calcolo IVA</title>
</head>
<body>
    <h1>Esercizio 1: Calcolo Iva</h1>
    <form method="post" action=<?php $_SERVER['PHP_SELF']?>>
        <label for="prezzoNetto">Inserisci il prezzo netto: <br><br></label>
        <input type="number" name="prezzoNetto" required>
        <input type="submit" name="submit" value="Calcola IVA">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $prezzoNetto = floatval($_POST['prezzoNetto']);
    calcolaPrezzoIvato($prezzoNetto);
}

function calcolaPrezzoIvato($prezzoNetto) {
    $iva = 20;
    $ivaCorrispondente = ($prezzoNetto * $iva) / 100;
    $prezzoIvato = $prezzoNetto + $ivaCorrispondente;
    return mostraPrezzoIvato($prezzoIvato);
}

function mostraPrezzoIvato($prezzoIvato) {
    echo "<br>Il prezzo ivato è: " . number_format($prezzoIvato, 2) . " €";
}

?>