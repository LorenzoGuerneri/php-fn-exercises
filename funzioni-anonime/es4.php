<!DOCTYPE html>
<html>

<head>
    <title>Calcolo Rata Mensile</title>
</head>

<body>
    <h1>Calcolo Prestito</h1>

    <form method="post">
        <label for="importoPrestito">Importo del prestito:</label>
        <input type="number" name="importoPrestito" required><br><br>

        <label for="tassoAnnuale">Tasso di interesse annuale (%):</label>
        <input type="number" name="tassoAnnuale" required><br><br>

        <label for="durataPrestito">Numero di anni di pagamenti:</label>
        <input type="number" name="durataPrestito" required><br><br>
        
        <button type="submit">Calcola rata mensile</button> <br>
    </form>

    <?php

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $importoPrestito = $_POST["importoPrestito"];
        $tassoAnnuale = $_POST["tassoAnnuale"];
        $durataPrestito = $_POST["durataPrestito"];

        echo "<p>Importo del prestito: $importoPrestito €</p>";
        echo "<p>Tasso di interesse annuale: $tassoAnnuale%</p>";
        echo "<p>Durata del prestito: $durataPrestito anni</p>";

        calcolaRataMensile($importoPrestito, $tassoAnnuale, $durataPrestito, 'mostraRataFinale');

    }

    function mostraRataFinale($rata) {
        $rataFormattata = number_format($rata, 2); 
        echo "<p>Il pagamento mensile è: $rataFormattata €</p>";
    }
    function calcolaRataMensile($importoPrestito, $tassoAnnuale, $durataPrestito, $callback)
    {
        $tassoInteresseMensile = ($tassoAnnuale / 100) / 12;
        $numeroPagamaneti = $durataPrestito * 12;

        $rataMensile = $importoPrestito * ($tassoInteresseMensile * pow(1 + $tassoInteresseMensile, $numeroPagamaneti)) / (pow(1 + $tassoInteresseMensile, $numeroPagamaneti) - 1);

        $callback($rataMensile);
    }

    ?>

</body>

</html>