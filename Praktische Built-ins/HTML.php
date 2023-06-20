<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HTML Built-ins in PHP</title>
</head>
<body>
    <?php
    // Beispiel 1: Überschrift
    $str_ueberschrift = "Willkommen auf meiner PHP-Website!";
    echo "<h1>$str_ueberschrift</h1>";

    // Beispiel 2: Absatz
    $str_absatz = "Dies ist ein Beispiel für die Verwendung von HTML-Built-ins in PHP.";
    echo "<p>$str_absatz</p>";

    // Beispiel 3: Link
    $str_link_url = "https://www.example.com";
    $str_link_text = "Besuchen Sie unsere Website";
    echo "<a href=\"$str_link_url\">$str_link_text</a>";

    // Beispiel 4: Bild
    $str_bild_url = "beispielbild.png";
    $str_bild_alt = "Ein Beispielbild";
    echo "<img src=\"$str_bild_url\" alt=\"$str_bild_alt\">";

    // Beispiel 5: Liste
    $arr_liste_elemente = array("Element 1", "Element 2", "Element 3");
    echo "<ul>";
    foreach ($arr_liste_elemente as $str_element) {
        echo "<li>$str_element</li>";
    }
    echo "</ul>";

    // Beispiel 6: Tabelle
    $arr_tabellen_daten = array(
        array("Name", "Alter", "Stadt"),
        array("Max Mustermann", 30, "Berlin"),
        array("Anna Schmidt", 25, "Hamburg")
    );
    echo "<table>";
    foreach ($arr_tabellen_daten as $arr_reihe) {
        echo "<tr>";
        foreach ($arr_reihe as $str_zelle) {
            echo "<td>$str_zelle</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Beispiel 7: Formular
    echo "<form action=\"submit.php\" method=\"post\">";
    echo "<input type=\"text\" name=\"str_name\" placeholder=\"Name\"><br>";
    echo "<input type=\"email\" name=\"str_email\" placeholder=\"E-Mail\"><br>";
    echo "<input type=\"submit\" value=\"Absenden\">";
    echo "</form>";

    // Beispiel 8: Umwandlung von Umlauten
    $str_umlaut_str = "ÄÖÜäöü";
    $str_umlaut_ersetzt_str = str_replace(array("Ä", "Ö", "Ü", "ä", "ö", "ü"), array("&Auml;", "&Ouml;", "&Uuml;", "&auml;", "&ouml;", "&uuml;"), $str_umlaut_str);
    echo "<p>Der String nach dem Ersetzen der Umlaute: $str_umlaut_ersetzt_str</p>";

    // Beispiel 9: Fettgedruckter Text
    $str_fett_text = "Dieser Text ist fettgedruckt";
    echo "<p><strong>$str_fett_text</strong></p>";

    // Beispiel 10: Kursiver Text
    $str_kursiv_text = "Dieser Text ist kursiv";
    echo "<p><em>$str_kursiv_text</em></p>";
    ?>
</body>
</html>
