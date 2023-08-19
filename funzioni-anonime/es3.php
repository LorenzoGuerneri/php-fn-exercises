<!DOCTYPE html>
<html>

<head>
    <title>Operazioni Aritmetiche</title>
</head>

<body>
    <h1>Esercizio: Operazioni Aritmetiche</h1>
    <form method="post" action="">
        <label for="numero1">Inserisci il primo numero:</label>
        <input type="number" name="numero1" required><br>
        <label for="numero2">Inserisci il secondo numero:</label>
        <input type="number" name="numero2" required><br>
        <input type="submit" name="submit" value="Calcola">
    </form>
    <br>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $numero1 = floatval($_POST['numero1']);
    $numero2 = floatval($_POST['numero2']);
    renderizzaTabella($numero1, $numero2);
}

function somma($a, $b)
{
    return $a + $b;
}

function differenza($a, $b)
{
    return $a - $b;
}

function moltiplicazione($a, $b)
{
    return $a * $b;
}

function divisione($a, $b)
{
    return $a / $b;
}

function resto($a, $b)
{
    return $a % $b;
}

function potenza($a, $b)
{
    return pow($a, $b);
}

function radice($a, $b)
{
    return $a * (1 / $b);
}

function renderizzaTabella($a, $b)
{
    echo '<table>';
    echo '<tr></tr>';

    echo "<tr><td>Somma</td><td>" . somma($a, $b) . "</td></tr>";
    echo "<tr><td>Differenza</td><td>" . differenza($a, $b) . "</td></tr>";
    echo "<tr><td>Moltiplicazione</td><td>" . moltiplicazione($a, $b) . "</td></tr>";
    echo "<tr><td>Divisione</td><td>" . divisione($a, $b) . "</td></tr>";
    echo "<tr><td>Resto</td><td>" . resto($a, $b) . "</td></tr>";
    echo "<tr><td>Potenza</td><td>" . potenza($a, $b) . "</td></tr>";
    echo "<tr><td>Radice 1°/2°</td><td>" . radice($a, $b) . "</td></tr>";
    echo '</table>';
}

?>