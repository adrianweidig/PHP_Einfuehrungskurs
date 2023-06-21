<?php

function generiereHeader($str_titel, $str_css = '') {
    echo '<!DOCTYPE html>
<html>
<head>
    <title>' . $str_titel . '</title>
    <style>
        /* Standard-CSS-Stile für den Header falls nichts übergeben wurde */
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
    ' . $str_css . '
</head>
<body>';
    // Hier könnte PHP Code stehen
}

function generiereFooter($str_footerInhalt = '') {
    // Hier könnte PHP Code stehen
    echo '
    <footer>
        ' . $str_footerInhalt . '
    </footer>
</body>
</html>';
}

function generiereTabelle($arr_daten, $str_tabellentitel = '') {
    if (!is_array($arr_daten) || !is_array($arr_daten[0])) {
        echo 'Falsche Tabellendaten übertragen';
        return;
    }

    echo '<table>';

    // Header
    echo '<thead><tr>';
    echo $str_tabellentitel;
    echo '</tr></thead>';

    // Body
    echo '<tbody>';
    foreach ($arr_daten as $arr_datensatz) {
        echo '<tr>';
        foreach ($arr_datensatz as $wert) {
            echo "<td>$wert</td>";
        }
        echo '</tr>';
    }
    echo '</tbody>';

    echo '</table>';
}
?>
