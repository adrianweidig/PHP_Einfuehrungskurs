<?php
// Beispiel 1: Referenz auf eine Variable erstellen
$int_zahl1 = 10;
$int_referenz =& $int_zahl1;

echo "Beispiel 1: Referenz auf eine Variable erstellen<br>\n";
echo "Wert von int_zahl1: $int_zahl1<br>\n"; // Ausgabe: 10
echo "Wert von Referenz: $int_referenz<br>\n"; // Ausgabe: 10

$int_zahl1 = 20; // Wert von int_zahl1 ändern

echo "Wert von int_zahl1 nach Änderung: $int_zahl1<br>\n"; // Ausgabe: 20
echo "Wert von Referenz nach Änderung: $int_referenz<br>\n"; // Ausgabe: 20
echo "<br>\n----------------------------<br>\n";

// Beispiel 2: Referenz als Funktionsparameter übergeben
function erhoeheZahl(&$int_zahl) {
    $int_zahl += 5;
}

$int_zahl2 = 15;
erhoeheZahl($int_zahl2);

echo "Beispiel 2: Referenz als Funktionsparameter übergeben<br>\n";
echo "Wert von int_zahl2 nach Funktion: $int_zahl2<br>\n"; // Ausgabe: 20
echo "<br>\n----------------------------<br>\n";

// Beispiel 3: Referenz auf Arrayelement erstellen
$arr_namen = ['Alice', 'Bob', 'Charlie'];
$str_referenz =& $arr_namen[1];

echo "Beispiel 3: Referenz auf Arrayelement erstellen<br>\n";
echo "Wert von arr_namen[1]: $arr_namen[1]<br>\n"; // Ausgabe: Bob
echo "Wert von Referenz: $str_referenz<br>\n"; // Ausgabe: Bob

$arr_namen[1] = 'David'; // Wert von arr_namen[1] ändern

echo "Wert von arr_namen[1] nach Änderung: $arr_namen[1]<br>\n"; // Ausgabe: David
echo "Wert von Referenz nach Änderung: $str_referenz<br>\n"; // Ausgabe: David
echo "<br>\n----------------------------<br>\n";

// Beispiel 4: Referenz auf Objektattribut erstellen
class Person {
    public $str_name;
}

$obj_person = new Person();
$obj_person->str_name = 'Alice';
$str_referenz =& $obj_person->str_name;

echo "Beispiel 4: Referenz auf Objektattribut erstellen<br>\n";
echo "Wert von obj_person->str_name: $obj_person->str_name<br>\n"; // Ausgabe: Alice
echo "Wert von Referenz: $str_referenz<br>\n"; // Ausgabe: Alice

$obj_person->str_name = 'Bob'; // Wert von obj_person->str_name ändern

echo "Wert von obj_person->str_name nach Änderung: $obj_person->str_name<br>\n"; // Ausgabe: Bob
echo "Wert von Referenz nach Änderung: $str_referenz<br>\n"; // Ausgabe: Bob
echo "<br>\n----------------------------<br>\n";

// Beispiel 5: Referenz auf eine Funktion erstellen
function &getZahl() {
    $int_zahl = 50;
    return $int_zahl;
}

$int_referenz =& getZahl();

echo "Beispiel 5: Referenz auf eine Funktion erstellen<br>\n";
echo "Wert von int_referenz: $int_referenz<br>\n"; // Ausgabe: 50

$int_referenz = 60; // Wert von int_referenz ändern

echo "Wert von int_referenz nach Änderung: $int_referenz<br>\n"; // Ausgabe: 60
echo "<br>\n----------------------------<br>\n";

// Beispiel 6: Referenz in einer foreach-Schleife
$arr_namen = ['Alice', 'Bob', 'Charlie'];

echo "Beispiel 6: Referenz in einer foreach-Schleife<br>\n";
foreach ($arr_namen as &$str_name) {
    $str_name = strtoupper($str_name);
}

echo "Werte von arr_namen nach Änderung:<br>\n";
foreach ($arr_namen as $str_name) {
    echo "$str_name<br>\n"; // Ausgabe: ALICE, BOB, CHARLIE
}
echo "<br>\n----------------------------<br>\n";

// Beispiel 7: Referenz auf globale Variable
$str_global = 'Wert 1';

function aendereGlobal() {
    global $str_global;
    $str_global = 'Wert 2';
}

aendereGlobal();

echo "Beispiel 7: Referenz auf globale Variable<br>\n";
echo "Wert von str_global: $str_global<br>\n"; // Ausgabe: Wert 2
echo "<br>\n----------------------------<br>\n";

// Beispiel 8: Referenz auf eine Klasse
class MeinKlasse {
    public function hallo() {
        echo "Hallo Welt!";
    }
}

$obj_klasse = new MeinKlasse();
$obj_referenz =& $obj_klasse;

echo "Beispiel 8: Referenz auf eine Klasse<br>\n";
$obj_referenz->hallo(); // Ausgabe: Hallo Welt!
echo "<br>\n----------------------------<br>\n";

// Beispiel 9: Referenz auf eine Funktion
function sagHallo() {
    echo "Hallo!";
}

$func_referenz = 'sagHallo';

echo "Beispiel 9: Referenz auf eine Funktion<br>\n";
$func_referenz(); // Ausgabe: Hallo!
echo "<br>\n----------------------------<br>\n";
?>
