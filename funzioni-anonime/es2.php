<!DOCTYPE html>
<html>

<head>
    <title>Tabelline</title>
</head>

<body>
    <h1>Esercizio 2: Tabelline</h1>
    <form method="post">
        <label for="numero">Inserisci un numero per calcolare la tabellina. <br><br></label>
        <input type="number" name="numero" required>
        <input type="submit" name="submit" value="Genera Tabellina">
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $numero = intval($_POST['numero']);
        arrayMoltiplicatori();
    }

    function arrayMoltiplicatori()
    {
        $moltiplicatori = array();
        for ($i = 1; $i <= 10; $i++) {
            $moltiplicatori[] = $i;
        }
        return renderizzaTabella($moltiplicatori);
    }

    function renderizzaTabella($moltiplicatori)
    {
        echo '<table>';
        echo '<tr>';
        echo '<td>Moltiplicatori</td>';

        foreach ($moltiplicatori as $moltiplicatore) {
            echo "<td>{$moltiplicatore}</td>";
        }
        echo '</tr>';
        echo '<tr>';
        echo '<td>Multipli</td>';

        $multipli = $moltiplicatori;
        foreach ($multipli as $multiplo) {
            echo "<td>" . $multiplo * intval($_POST['numero']) . "</td>";
        }
        echo '</tr>';
        echo '</table>';
    }
    ?>
</body>

</html>