<!DOCTYPE html>
<html>
<head>
    <title>Wurftabelle</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Wurftabelle</h1>
    
    <?php
    function wuerfel_ausgabe($str_spielername, $int_anzahl_runden) {
        echo "<p>Hallo $str_spielername !</p>";

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Wurf-Nr</th>";
        echo "<th>Augenzahl</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        for ($i = 1; $i <= $int_anzahl_runden; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . rand(1, 6) . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }

    wuerfel_ausgabe("Bernd", 10);
    ?>
</body>
</html>
