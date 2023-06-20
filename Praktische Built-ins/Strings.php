<?php
// String-Länge ermitteln
$str_text = "Hallo, Welt!";
$int_stringlaenge = strlen($str_text);
echo "Die Länge des Strings '$str_text' beträgt: $int_stringlaenge<br>\n";

// Teilstring extrahieren
$str_teilstring = substr($str_text, 7, 5);
echo "Der Teilstring ab Position 7 mit einer Länge von 5 Zeichen lautet: $str_teilstring<br>\n";

// Zeichen in String ersetzen
$str_ersetzterString = str_replace("Welt", "PHP", $str_text);
echo "Der String nach dem Ersetzen von 'Welt' durch 'PHP' lautet: $str_ersetzterString<br>\n";

// Zeichenkette in Kleinbuchstaben umwandeln
$str_kleinbuchstabenText = strtolower($str_text);
echo "Der String in Kleinbuchstaben lautet: $str_kleinbuchstabenText<br>\n";

// Zeichenkette in Großbuchstaben umwandeln
$str_grossbuchstabenText = strtoupper($str_text);
echo "Der String in Großbuchstaben lautet: $str_grossbuchstabenText<br>\n";

// Ersten Buchstaben groß schreiben
$str_ersterBuchstabeGross = ucfirst($str_text);
echo "Der String mit dem ersten Buchstaben als Großbuchstaben lautet: $str_ersterBuchstabeGross<br>\n";

// Alle Wörter im Satz groß schreiben
$str_alleWoerterGross = ucwords($str_text);
echo "Der String mit allen Wörtern im Satz als Großbuchstaben lautet: $str_alleWoerterGross<br>\n";

// String umgekehrt lesen
$str_umgekehrtLesen = strrev($str_text);
echo "Der String rückwärts gelesen lautet: $str_umgekehrtLesen<br>\n";

// String nach Leerzeichen aufteilen und in ein Array speichern
$str_text_woerter = explode(" ", $str_text);
echo "Der String als Array nach der Aufteilung an Leerzeichen:<br>\n";
print_r($str_text_woerter);
echo "<br>\n";

// Array in einen String zusammenfügen
$str_text_aus_array = implode(" ", $str_text_woerter);
echo "Der String nach der Zusammenführung des Arrays: $str_text_aus_array<br>\n";

// Anzahl der Vorkommen eines Zeichens im String zählen
$int_zeichenanzahl = substr_count($str_text, "o");
echo "Die Anzahl der Vorkommen des Buchstabens 'o' im String: $int_zeichenanzahl<br>\n";

// String trimmen (Leerzeichen am Anfang und Ende entfernen)
$str_trimmen = "   Hallo, Welt!   ";
$str_getrimmterString = trim($str_trimmen);
echo "Der String nach dem Trimmen der Leerzeichen: $str_getrimmterString<br>\n";

// String wiederholen
$str_wiederholterString = str_repeat($str_text, 3);
echo "Der String nach der Wiederholung 3 mal: $str_wiederholterString<br>\n";

// Zeichenkette um bestimmte Anzahl Zeichen auffüllen
$str_auffuellung = str_pad($str_text, 20, "*", STR_PAD_BOTH);
echo "Der String nach dem Auffüllen mit '*' auf eine Länge von 20 Zeichen: $str_auffuellung<br>\n";

// Position eines Teilstrings im String finden
$int_position = strpos($str_text, "Welt");
echo "Die Position des Teilstrings 'Welt' im String: $int_position<br>\n";

// Teilstring ab bestimmter Position zurückgeben
$str_teilstring_ab_pos = substr($str_text, $int_position);
echo "Der Teilstring ab der Position $int_position: $str_teilstring_ab_pos<br>\n";

// Zeichenkette in HTML-Entities umwandeln
$str_html_entities = htmlentities($str_text);
echo "Der String als HTML-Entities: $str_html_entities<br>\n";

// Zeichenkette aus HTML-Entities zurückwandeln
$str_decodierte_html = html_entity_decode($str_html_entities);
echo "Der String nach dem Zurückwandeln der HTML-Entities: $str_decodierte_html<br>\n";

// Zeichenkette in URL-Format kodieren
$str_url_kodiert = urlencode($str_text);
echo "Der String als URL-kodierter String: $str_url_kodiert<br>\n";

// Zeichenkette aus URL-kodiertem String zurückwandeln
$str_url_dekodiert = urldecode($str_url_kodiert);
echo "Der String nach dem Zurückwandeln des URL-kodierten Strings: $str_url_dekodiert<br>\n";

// Zeichenkette in Base64 kodieren
$str_base64_kodiert = base64_encode($str_text);
echo "Der String als Base64-kodierter String: $str_base64_kodiert<br>\n";

// Zeichenkette aus Base64-kodiertem String zurückwandeln
$str_base64_dekodiert = base64_decode($str_base64_kodiert);
echo "Der String nach dem Zurückwandeln des Base64-kodierten Strings: $str_base64_dekodiert<br>\n";

// Zeichenkette durch ein anderes Zeichen ersetzen
$str_zeichen_ersetzen = strtr($str_text, "HW", "PH");
echo "Der String nach dem Ersetzen von 'H' durch 'P' und 'W' durch 'H': $str_zeichen_ersetzen<br>\n";

// Überprüfen, ob ein String mit einem bestimmten Teilstring beginnt
$str_anfang = "Hello";
$str_beginnt_mit_anfang = (strncmp($str_text, $str_anfang, strlen($str_anfang)) === 0) ? "true" : "false";
echo "Der String beginnt mit '$str_anfang': $str_beginnt_mit_anfang<br>\n";

// Überprüfen, ob ein String mit einem bestimmten Teilstring endet
$str_ende = "ld!";
$str_endet_mit_ende = (substr_compare($str_text, $str_ende, -strlen($str_ende)) === 0) ? "true" : "false";
echo "Der String endet mit '$str_ende': $str_endet_mit_ende<br>\n";

// Zeichenkette auf bestimmtes Format überprüfen (Regulärer Ausdruck)
$str_email = "test@example.com";
$bool_gueltige_email = preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/", $str_email);
$str_gueltige_email = ($bool_gueltige_email === 1) ? "true" : "false";
echo "Die E-Mail-Adresse '$str_email' ist gültig: $str_gueltige_email<br>\n";

// Ersetzen von Umlauten in einem String
$str_umlaut = "ÄÖÜäöü";
$str_ersetzte_umlaut = str_replace(array("Ä", "Ö", "Ü", "ä", "ö", "ü"), array("Ae", "Oe", "Ue", "ae", "oe", "ue"), $str_umlaut);
echo "Der String nach dem Ersetzen der Umlaute: $str_ersetzte_umlaut<br>\n";

// Zufälligen String generieren
$str_zufallsstring = bin2hex(random_bytes(5));
echo "Ein zufällig generierter String: $str_zufallsstring<br>\n";

// Prüfen, ob ein String eine gültige Zahl ist
$str_zahl = "42";
$bool_gueltige_zahl = is_numeric($str_zahl);
$str_gueltige_zahl = ($bool_gueltige_zahl === true) ? "true" : "false";
echo "Der String '$str_zahl' ist eine gültige Zahl: $str_gueltige_zahl<br>\n";

// Zeichenkette auf Worte zählen
$int_woerteranzahl = str_word_count($str_text);
echo "Die Anzahl der Wörter im String: $int_woerteranzahl<br>\n";

// Zeichenkette um bestimmte Anzahl Zeichen verkürzen
$str_verkuerzt = substr($str_text, 0, 8) . "...";
echo "Der String nach der Verkürzung auf 8 Zeichen: $str_verkuerzt<br>\n";

// Zeichenkette um bestimmte Anzahl Zeichen erweitern
$str_erweitert = str_pad($str_text, strlen($str_text) + 5, "!", STR_PAD_RIGHT);
echo "Der String nach der Erweiterung um 5 Ausrufezeichen: $str_erweitert<br>\n";

// Zeichenkette in ein Array aufteilen
$arr_zeichen = str_split($str_text);
echo "Der String als Array nach der Aufteilung in einzelne Zeichen:<br>\n";
print_r($arr_zeichen);
echo "<br>\n";

// Anzahl der Wörter in einem String zählen
$int_woerteranzahl = str_word_count($str_text);
echo "Die Anzahl der Wörter im String: $int_woerteranzahl<br>\n";

// Ersten Buchstaben aller Wörter in einem String groß schreiben
$str_anfang_buchstaben_gross = ucwords($str_text);
echo "Der String mit dem ersten Buchstaben aller Wörter als Großbuchstaben: $str_anfang_buchstaben_gross<br>\n";

// Zeichenkette anhand eines Trennzeichens in ein Array aufteilen
$arr_aufgeteilt = explode(",", $str_text);
echo "Der String als Array nach der Aufteilung anhand des Trennzeichens ',':<br>\n";
print_r($arr_aufgeteilt);
echo "<br>\n";

// Überprüfen, ob ein String nur aus Großbuchstaben besteht
$bool_nur_grossbuchstaben = ctype_upper($str_text);
$str_nur_grossbuchstaben = ($bool_nur_grossbuchstaben === true) ? "true" : "false";
echo "Der String besteht nur aus Großbuchstaben: $str_nur_grossbuchstaben<br>\n";

// Überprüfen, ob ein String nur aus Kleinbuchstaben besteht
$bool_nur_kleinbuchstaben = ctype_lower($str_text);
$str_nur_kleinbuchstaben = ($bool_nur_kleinbuchstaben === true) ? "true" : "false";
echo "Der String besteht nur aus Kleinbuchstaben: $str_nur_kleinbuchstaben<br>\n";

// Ersten Buchstaben jedes Worts in einem String groß schreiben
$str_woerter_erster_buchstabe_gross = ucwords($str_text);
echo "Der String mit dem ersten Buchstaben jedes Worts als Großbuchstaben: $str_woerter_erster_buchstabe_gross<br>\n";

// Zeichenkette in einem bestimmten Zeichenbereich suchen und ersetzen
$str_suche_ersetze = str_replace("o", "X", $str_text, $count);
echo "Der String nach dem Ersetzen des Buchstabens 'o' durch 'X': $str_suche_ersetze<br>\n";
echo "Die Anzahl der Ersetzungen: $count<br>\n";

// Alle Zeichen in einem String umkehren
$str_umgedreht = strrev($str_text);
echo "Der String rückwärts gelesen: $str_umgedreht<br>\n";

// Zeichenkette in ein Array aufteilen (mit Begrenzung)
$str_begrenzung = "Hello,World,PHP,OpenAI";
$arr_aufgeteilt_begrenzung = explode(",", $str_begrenzung, 2);
echo "Der String als Array nach der Aufteilung mit einer Begrenzung von 2 Elementen:<br>\n";
print_r($arr_aufgeteilt_begrenzung);
echo "<br>\n";

// Überprüfen, ob ein String nur aus alphanumerischen Zeichen besteht
$bool_alphanumerisch = ctype_alnum($str_text);
$str_alphanumerisch = ($bool_alphanumerisch === true) ? "true" : "false";
echo "Der String besteht nur aus alphanumerischen Zeichen: $str_alphanumerisch<br>\n";

// String in mehrere Zeilen aufteilen
$str_mehrere_zeilen = "Hello\nWorld\nPHP";
$arr_mehrere_zeilen = explode("\n", $str_mehrere_zeilen);
echo "Der String als Array nach der Aufteilung in mehrere Zeilen:<br>\n";
print_r($arr_mehrere_zeilen);
echo "<br>\n";

// Array in String umwandeln, wobei die erste Stelle für das Trennzeichen steht
$arr_worte = array("Hallo", "Welt", "PHP");
$str_satz = implode(" ", $arr_worte);
echo $str_satz;

?>