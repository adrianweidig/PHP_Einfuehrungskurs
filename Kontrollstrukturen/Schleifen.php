<?php
// Beispiel für verschiedene Arten von Schleifen in PHP

// Array erstellen
$str_arr_fruechte = array("Apfel", "Banane", "Orange", "Erdbeere");

// Länge des Arrays speichern um zu verhindern, dass bei
// jedem Schleifendurchlauf count() neu aufgerufen wird
$int_laenge = count($str_arr_fruechte);

// foreach-Schleife
echo "foreach-Schleife:<br>\n";
foreach ($str_arr_fruechte as $str_frucht) {
    echo $str_frucht . "<br>\n";
}
echo "<br>\n";

echo "----------------------------<br>\n";

// kopfgesteuerte Schleife (while)
echo "kopfgesteuerte Schleife (while):<br>\n";
$i = 0;
while ($i < $int_laenge) {
    echo $str_arr_fruechte[$i] . "<br>\n";
    $i++;
}
echo "<br>\n";

echo "----------------------------<br>\n";

// fußgesteuerte Schleife (do-while)
echo "fußgesteuerte Schleife (do-while):<br>\n";
$i = 0;
do {
    echo $str_arr_fruechte[$i] . "<br>\n";
    $i++;
} while ($i < $int_laenge);
echo "<br>\n";

echo "----------------------------<br>\n";

// zählerschleife (for)
echo "zählerschleife (for):<br>\n";
for ($i = 0; $i < $int_laenge; $i++) {
    echo $str_arr_fruechte[$i] . "<br>\n";
}
echo "<br>\n";

echo "----------------------------<br>\n";

// zählerschleife mit Doppelpunkt (for)
echo "zählerschleife mit Doppelpunkt (for):<br>\n";
for ($i = 0; $i < $int_laenge; $i++):
    echo $str_arr_fruechte[$i] . "<br>\n";
endfor;
echo "<br>\n";

echo "----------------------------<br>\n";

// kopfgesteuerte Schleife mit Doppelpunkt (while)
echo "kopfgesteuerte Schleife mit Doppelpunkt (while):<br>\n";
$i = 0;
while ($i < $int_laenge):
    echo $str_arr_fruechte[$i] . "<br>\n";
    $i++;
endwhile;
echo "<br>\n";

echo "----------------------------<br>\n";

// Keine Variante mit Doppelpunkt für do - while

// Beispiel mit break
echo "<br>\n";
echo "Beispiel mit break:<br>\n";
foreach ($str_arr_fruechte as $str_frucht) {
    if ($str_frucht === 'Orange') {
        break; // Schleife wird beendet, wenn 'Orange' erreicht wird
    }
    echo $str_frucht . "<br>\n";
}
echo "<br>\n";

echo "----------------------------<br>\n";

// Beispiel mit continue
echo "<br>\n";
echo "Beispiel mit continue:<br>\n";
foreach ($str_arr_fruechte as $str_frucht) {
    if ($str_frucht === 'Banane') {
        continue; // Springt zur nächsten Iteration, wenn 'Banane' erreicht wird
    }
    echo $str_frucht . "<br>\n";
}
echo "<br>\n";

echo "----------------------------<br>\n";

// Mehrfacher break / continue Aufruf
// Dies sorgt dafür, dass von innen nach außen hin break bzw.
// continue so oft aufgerufen wird wie in der Klammer angegeben

// Beispiel mit break(2)
echo "Beispiel mit break(2):<br>\n";
for ($i = 1; $i <= 3; $i++) {
    echo "Iteration: $i<br>\n";
    switch ($i) {
        case 1:
            echo "Fall 1<br>\n";
            break;
        case 2:
            echo "Fall 2<br>\n";
            break(2); // Beendet sowohl den switch-Block als auch die äußere Schleife
        case 3:
            echo "Fall 3<br>\n";
            break;
    }
}
echo "<br>\n";

echo "----------------------------<br>\n";

// Beispiel mit continue(2)
echo "Beispiel mit continue(2):<br>\n";
for ($i = 1; $i <= 3; $i++) {
    echo "Iteration: $i<br>\n";
    switch ($i) {
        case 1:
            echo "Fall 1<br>\n";
            break;
        case 2:
            echo "Fall 2<br>\n";
            continue(2); // Überspringt sowohl den Rest des switch-Blocks als auch die aktuelle Iteration der äußeren Schleife
        case 3:
            echo "Fall 3<br>\n";
            break;
    }
    echo "Nach switch-Block<br>\n"; // Wird nicht erreicht, wenn continue(2) (also bei Iteration 2) verwendet wird
}
?>
