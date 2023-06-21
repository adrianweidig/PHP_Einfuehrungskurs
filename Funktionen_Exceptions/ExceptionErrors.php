<?php

// Beispiel 1: Division durch Null
$int_zahl1 = 10;
$int_zahl2 = 0;

// Benutzerdefinierte Fehlerbehandlungsroutine für DivisionByZeroError
set_error_handler(function($errno, $errstr) {
    throw new DivisionByZeroError($errstr, $errno);
});

try {
    $int_ergebnis = $int_zahl1 / $int_zahl2;
    echo "Das Ergebnis ist: $int_ergebnis<br>\n";
} catch (DivisionByZeroError $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

// Fehlerbehandlungsroutine wiederherstellen (DivisionByZero wird quasi wieder entfernt)
restore_error_handler();

// Beispiel 2: Undefinierte Variable
set_error_handler(function($errno, $errstr) {
    throw new Error($errstr, $errno);
});

try {
    echo $str_text . "<br>\n";
} catch (Error $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 3: Zugriff auf ein Array-Element außerhalb des gültigen Indexbereichs
$arr_namen = ["Max", "Lisa", "Tom"];

set_error_handler(function($errno, $errstr) {
    throw new Error($errstr, $errno);
});

try {
    echo $arr_namen[3] . "<br>\n";
} catch (Error $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 4: Unerlaubte Typumwandlung
$str_text = "123abc";

set_error_handler(function($errno, $errstr) {
    throw new TypeError($errstr, $errno);
});

try {
    $int_zahl = (int)$str_text;
} catch (TypeError $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 5: Datei nicht gefunden
set_error_handler(function($errno, $errstr) {
    throw new Exception($errstr, $errno);
});

try {
    include "nicht_vorhandene_datei.php";
} catch (Throwable $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 6: Division durch einen String
$str_zahl = "5";
$str_divisor = "2";

set_error_handler(function($errno, $errstr) {
    throw new TypeError($errstr, $errno);
});

try {
    $int_ergebnis = $str_zahl / $str_divisor;
    echo "Das Ergebnis ist: $int_ergebnis<br>\n";
} catch (TypeError $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 7: Aufruf einer nicht existierenden Funktion
set_error_handler(function($errno, $errstr) {
    throw new Error($errstr, $errno);
});

try {
    nicht_vorhandene_funktion();
} catch (Error $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 8: Fehler beim Öffnen einer Datei
set_error_handler(function($errno, $errstr) {
    throw new Exception($errstr, $errno);
});

try {
    $file = fopen("nicht_vorhandene_datei.txt", "r");
} catch (Throwable $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 9: Unerlaubter Zugriff auf private Eigenschaft
class MeinKlasse {
    private $str_name = "Max";
}

$meinKlasse = new MeinKlasse();

set_error_handler(function($errno, $errstr) {
    throw new Error($errstr, $errno);
});

try {
    echo $meinKlasse->$str_name . "<br>\n";
} catch (Error $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

// Beispiel 10: Unerlaubter Zugriff auf nicht vorhandene Klasse
set_error_handler(function($errno, $errstr) {
    throw new Error($errstr, $errno);
});

try {
    $objekt = new NichtVorhandeneKlasse();
} catch (Error $e) {
    echo "Fehler: " . $e->getMessage() . "<br>\n";
}

restore_error_handler();

?>
