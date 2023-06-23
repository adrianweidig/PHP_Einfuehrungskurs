<?php
// CSV-Datei erstellen
$str_csvDatei = 'daten.csv';

// Beispiel 1: CSV-Datei erstellen
function beispiel1()
{
    echo 'Beispiel 1: CSV-Datei erstellen.<br>';

    global $str_csvDatei;
    $arr_datenArray = array(
        array('Name', 'Alter', 'Stadt'),
        array('Max', 25, 'Berlin'),
        array('Anna', 30, 'Hamburg')
    );

    $str_csvInhalt = '';
    foreach ($arr_datenArray as $arr_daten) {
        if (is_array($arr_daten)) {
            $str_csvInhalt .= implode(',', $arr_daten) . "\n";
        }
    }

    file_put_contents($str_csvDatei, $str_csvInhalt);
}

// Beispiel 2: Daten aus CSV-Datei lesen und in Tabelle darstellen
function beispiel2()
{
    echo 'Beispiel 2: Daten aus CSV-Datei lesen und in Tabelle darstellen.<br>';

    global $str_csvDatei;
    $str_csvInhalt = file_get_contents($str_csvDatei);
    $arr_datenArray = explode("\n", $str_csvInhalt);

    echo '<table>';
    foreach ($arr_datenArray as $index => $str_daten) {
        if (!empty($str_daten)) {
            $arr_spalten = explode(',', $str_daten);
            if ($index === 0) {
                echo '<thead><tr>';
                foreach ($arr_spalten as $spalte) {
                    echo '<th>' . $spalte . '</th>';
                }
                echo '</tr></thead>';
                echo '<tbody>';
            } else {
                echo '<tr>';
                foreach ($arr_spalten as $spalte) {
                    echo '<td>' . $spalte . '</td>';
                }
                echo '</tr>';
            }
        }
    }
    echo '</tbody></table>';
}

// Beispiel 3: Neue Daten zur CSV-Datei hinzufügen
function beispiel3()
{
    echo 'Beispiel 3: Neue Daten zur CSV-Datei hinzufügen.<br>';

    global $str_csvDatei;
    $arr_neueDaten = array('Lisa', 28, 'München');
    $str_csvInhalt = file_get_contents($str_csvDatei); // Vorhandenen Inhalt lesen
    $str_csvInhalt .= implode(',', $arr_neueDaten) . "\n";
    file_put_contents($str_csvDatei, $str_csvInhalt);
}

// Beispiel 4: Bestimmte Zeile in CSV-Datei ändern
function beispiel4()
{
    echo 'Beispiel 4: Bestimmte Zeile in CSV-Datei ändern.<br>';

    global $str_csvDatei;
    $arr_datenArray = array_map('str_getcsv', file($str_csvDatei));
    $arr_datenArray[1] = array('Max', 26, 'Frankfurt');
    $str_csvInhalt = '';
    foreach ($arr_datenArray as $arr_daten) {
        if (is_array($arr_daten)) {
            $str_csvInhalt .= implode(',', $arr_daten) . "\n";
        }
    }
    file_put_contents($str_csvDatei, $str_csvInhalt);
}

// Beispiel 5: Daten aus CSV-Datei filtern und in Tabelle darstellen
function beispiel5()
{
    echo 'Beispiel 5: Daten aus CSV-Datei filtern und in Tabelle darstellen.<br>';

    global $str_csvDatei;
    $str_csvInhalt = file_get_contents($str_csvDatei);
    $arr_datenArray = explode("\n", $str_csvInhalt);

    // Der Null-Kohlenstoff-Operator wird verwendet, um den Standardwert '' (leerer String) festzulegen, wenn $_POST['filter_name'] null ist.
    // Syntax: "Was soll geprüft werden" ?? "Was soll es sein wenn dieses null ist"

    $filter_name = $_POST['filter_name'] ?? '';
    $filter_alter = $_POST['filter_alter'] ?? '';
    $filter_stadt = $_POST['filter_stadt'] ?? '';

    echo '<table>';
    foreach ($arr_datenArray as $index => $str_daten) {
        $arr_spalten = explode(',', $str_daten);

        // Spaltenüberschriften
        if ($index === 0) {
            echo '<thead><tr>';
            foreach ($arr_spalten as $spalte) {
                echo '<th>' . $spalte . '</th>';
            }
            echo '</tr></thead>';
            echo '<tbody>';
        } else if (
            isset($arr_spalten[0]) && strpos($arr_spalten[0], $filter_name) !== false &&
            isset($arr_spalten[1]) && strpos($arr_spalten[1], $filter_alter) !== false &&
            isset($arr_spalten[2]) && strpos($arr_spalten[2], $filter_stadt) !== false 
        ) {
         
            echo '<tr>';
            foreach ($arr_spalten as $spalte) {
                echo '<td>' . $spalte . '</td>';
            }
            echo '</tr>';
        }
    }
    echo '</tbody></table>';
}

// Beispiel 6: CSV-Datei löschen
function beispiel6()
{
    echo 'Beispiel 6: CSV-Datei löschen.<br>';

    global $str_csvDatei;
    unlink($str_csvDatei);
}

// Funktionen aufrufen und Ergebnisse anzeigen
if (isset($_POST['beispiel1'])) {
    beispiel1();
}

if (isset($_POST['beispiel2'])) {
    beispiel2();
}

if (isset($_POST['beispiel3'])) {
    beispiel3();
}

if (isset($_POST['beispiel4'])) {
    beispiel4();
}

if (isset($_POST['beispiel5'])) {
    beispiel5();
}

if (isset($_POST['beispiel6'])) {
    beispiel6();
}
?>

<!-- HTML-Formular zur Demonstration der Beispiele -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datenverarbeitung mit CSV-Dateien</title>
</head>
<body>
    <h1>Datenverarbeitung mit CSV-Dateien</h1>
    
    <!-- Buttons zur Ausführung der Beispiele -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" name="beispiel1" value="Beispiel 1: CSV-Datei erstellen"><br>
        <input type="submit" name="beispiel2" value="Beispiel 2: Daten aus CSV-Datei lesen"><br>
        <input type="submit" name="beispiel3" value="Beispiel 3: Neue Daten zur CSV-Datei hinzufügen"><br>
        <input type="submit" name="beispiel4" value="Beispiel 4: Bestimmte Zeile in CSV-Datei ändern"><br>
        <input type="submit" name="beispiel6" value="Beispiel 6: CSV-Datei löschen"><br>
        <!-- Weitere Buttons für die restlichen Beispiele -->
    </form>

    <!-- Formular für Filtereingaben -->
    <h2>Beispiel 5: Daten filtern</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="filter_name">Name:</label>
        <input type="text" name="filter_name" id="filter_name">
        <br>
        <label for="filter_alter">Alter:</label>
        <input type="text" name="filter_alter" id="filter_alter">
        <br>
        <label for="filter_stadt">Stadt:</label>
        <input type="text" name="filter_stadt" id="filter_stadt">
        <br>
        <input type="submit" name="beispiel5" value="Filter anwenden">
    </form>
</body>
</html>
