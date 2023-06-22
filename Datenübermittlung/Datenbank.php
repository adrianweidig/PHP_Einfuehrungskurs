<?php
// Hinweis: Diese Implementierung verwendet die veraltete mysqli-Erweiterung für PHP.
// Es wird empfohlen, die PDO-Erweiterung oder eine ORM-Bibliothek wie Laravel zu verwenden,
// um sicherere und modernere Datenbankzugriffsmethoden zu verwenden.


// mysqli Funktionserklärung:
// mysqli_connect(): Stellt eine Verbindung zur MySQL-Datenbank her.
// $con_verbindung = mysqli_connect($str_host, $str_benutzername, $str_passwort, $str_datenbankname);

// mysqli_connect_error(): Gibt eine Beschreibung des letzten Verbindungsfehlers zurück.
// mysqli_connect_error();

// mysqli_query(): Führt eine SQL-Abfrage auf der Datenbank aus.
// $res_erstellen = mysqli_query($con_verbindung, $str_tabelle);

// mysqli_error(): Gibt eine Beschreibung des letzten Fehlers zurück.
// mysqli_error($con_verbindung);

// mysqli_fetch_assoc(): Holt eine Zeile aus dem Abfrageergebnis als assoziatives Array.
// $zeile = mysqli_fetch_assoc($res_abfragen);

// mysqli_query(): Führt eine SQL-Abfrage auf der Datenbank aus.
// $res_update = mysqli_query($con_verbindung, $str_update);

// mysqli_query(): Führt eine SQL-Abfrage auf der Datenbank aus.
// $res_delete = mysqli_query($con_verbindung, $str_delete);

// mysqli_prepare(): Bereitet eine SQL-Abfrage für die Ausführung vor und gibt ein Statement-Objekt zurück.
// $stmt = mysqli_prepare($con_verbindung, $str_abfrage);

// mysqli_stmt_bind_param(): Bindet Variablen an Parameter in der vorbereiteten SQL-Abfrage.
// mysqli_stmt_bind_param($stmt, $datentypen, $var1, $var2, ...);

// mysqli_stmt_execute(): Führt die vorbereitete SQL-Abfrage aus.
// mysqli_stmt_execute($stmt);

// mysqli_stmt_bind_result(): Bindet Variablen an Spalten in den Ergebnissen einer vorbereiteten Abfrage.
// mysqli_stmt_bind_result($stmt, $var1, $var2, ...);

// mysqli_stmt_fetch(): Holt die nächste Zeile aus dem Ergebnis einer vorbereiteten Abfrage und speichert die Werte in den gebundenen Variablen.
// mysqli_stmt_fetch($stmt);

// mysqli_stmt_close(): Schließt ein vorbereitetes Statement.
// mysqli_stmt_close($stmt);

// mysqli_commit(): Bestätigt eine Transaktion und speichert die Änderungen dauerhaft.
// mysqli_commit($con_verbindung);

// mysqli_rollback(): Setzt eine Transaktion zurück und verwirft die Änderungen.
// mysqli_rollback($con_verbindung);

// mysqli_close(): Schließt die Verbindung zur MySQL-Datenbank.
// mysqli_close($con_verbindung);


// Fehlercodes:
// 1044: Der Benutzer hat keine ausreichenden Berechtigungen, um auf die Datenbank zuzugreifen.
// 1045: Der Benutzername oder das Passwort für die Datenbankverbindung ist falsch.
// 1062: Ein eindeutiger Schlüsselverstoß ist aufgetreten, z.B. beim Versuch, einen Datensatz einzufügen, der bereits existiert.
// 1064: Die SQL-Abfrage weist einen Syntaxfehler auf.
// 1146: Die angegebene Tabelle existiert nicht in der Datenbank.
// 1241: Fehler bei der Ausführung einer vorbereiteten SQL-Abfrage aufgrund eines Parameterfehlers.
// 1242: Fehler bei der Ausführung einer SQL-Abfrage aufgrund einer Unterabfrage, die mehrere Zeilen zurückgibt.
// 1364: Fehler bei der Einfügung von Daten in eine Spalte, die als NOT NULL deklariert ist, aber keinen Wert erhalten hat.
// 1451: Ein Fremdschlüsselverstoß ist aufgetreten, z.B. beim Versuch, einen Datensatz zu löschen, der von anderen Tabellen referenziert wird.
// 2002: Es konnte keine Verbindung zum MySQL-Server hergestellt werden.
// 2003: Der MySQL-Server wurde nicht gefunden.
// 2006: Die Verbindung zum MySQL-Server wurde unerwartet während der Kommunikation unterbrochen.
// 2013: Die Verbindung zum MySQL-Server wurde wegen einer zu langen Inaktivitätszeit abgebrochen.


// Beispiel 1: Verbindung zur Datenbank herstellen
echo "<h2>Beispiel 1: Verbindung zur Datenbank herstellen</h2>";

$str_host = 'localhost';
$str_benutzername = 'root';
$str_passwort = '';
$str_datenbankname = 'schulung';
$con_verbindung = mysqli_connect($str_host, $str_benutzername, $str_passwort, $str_datenbankname);

if (!$con_verbindung) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . mysqli_connect_error());
}

echo "<p>Verbindung zur Datenbank hergestellt.</p>";

// Beispiel 2: Tabelle erstellen
echo "<h2>Beispiel 2: Tabelle erstellen</h2>";
$str_tabelle = "CREATE TABLE IF NOT EXISTS benutzer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vorname VARCHAR(50) NOT NULL,
    nachname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

// Liefert true, wenn erfolgreich
$res_erstellen = mysqli_query($con_verbindung, $str_tabelle);

if ($res_erstellen) {
    echo "<p>Tabelle erfolgreich erstellt oder bereits vorhanden.</p>";
} else {
    echo "<p>Fehler beim Erstellen der Tabelle: " . mysqli_error($con_verbindung) . "</p>";
}

// Beispiel 3: Daten in die Tabelle einfügen
echo "<h2>Beispiel 3: Daten in die Tabelle einfügen</h2>";
if (isset($_POST['insert'])) {
    $str_vorname = $_POST['vorname'];
    $str_nachname = $_POST['nachname'];
    $str_email = $_POST['email'];

    $str_einfuegen = "INSERT INTO benutzer (vorname, nachname, email) VALUES ('$str_vorname', '$str_nachname', '$str_email')";

    $res_einfuegen = mysqli_query($con_verbindung, $str_einfuegen);

    if ($res_einfuegen) {
        echo "<p>Datensatz erfolgreich eingefügt.</p>";
    } else {
        echo "<p>Fehler beim Einfügen des Datensatzes: " . mysqli_error($con_verbindung) . "</p>";
    }
}

echo "<form method='POST' action=''>";
echo "<input type='text' name='vorname' placeholder='Vorname' required><br>";
echo "<input type='text' name='nachname' placeholder='Nachname' required><br>";
echo "<input type='email' name='email' placeholder='Email' required><br>";
echo "<input type='submit' name='insert' value='Einfügen'>";
echo "</form>";

// Beispiel 4: Daten aus der Tabelle abrufen
echo "<h2>Beispiel 4: Daten aus der Tabelle abrufen</h2>";

$str_abfragen = "SELECT * FROM benutzer";
$res_abfragen = mysqli_query($con_verbindung, $str_abfragen);

echo "<table>";
echo "<tr><th>ID</th><th>Vorname</th><th>Nachname</th><th>Email</th></tr>";

while ($zeile = mysqli_fetch_assoc($res_abfragen)) {
    echo "<tr>";
    echo "<td>" . $zeile['id'] . "</td>";
    echo "<td>" . $zeile['vorname'] . "</td>";
    echo "<td>" . $zeile['nachname'] . "</td>";
    echo "<td>" . $zeile['email'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Beispiel 5: Daten in der Tabelle aktualisieren
echo "<h2>Beispiel 5: Daten in der Tabelle aktualisieren</h2>";

if (isset($_POST['update'])) {
    $int_id = $_POST['id'];
    $str_neuer_vorname = $_POST['neuer_vorname'];
    $str_neuer_nachname = $_POST['neuer_nachname'];

    $str_update = "UPDATE benutzer SET vorname='$str_neuer_vorname', nachname='$str_neuer_nachname' WHERE id=$int_id";
    $res_update = mysqli_query($con_verbindung, $str_update);

    if ($res_update) {
        echo "<p>Datensatz erfolgreich aktualisiert.</p>";
    } else {
        echo "<p>Fehler beim Aktualisieren des Datensatzes: " . mysqli_error($con_verbindung) . "</p>";
    }
}

echo "<form method='POST' action=''>";
echo "<input type='number' name='id' placeholder='ID' required><br>";
echo "<input type='text' name='neuer_vorname' placeholder='Neuer Vorname' required><br>";
echo "<input type='text' name='neuer_nachname' placeholder='Neuer Nachname' required><br>";
echo "<input type='submit' name='update' value='Aktualisieren'>";
echo "</form>";

// Beispiel 6: Daten in der Tabelle löschen
echo "<h2>Beispiel 6: Daten in der Tabelle löschen</h2>";

if (isset($_POST['delete'])) {
    $int_id = $_POST['id'];

    $str_delete = "DELETE FROM benutzer WHERE id=$int_id";
    $res_delete = mysqli_query($con_verbindung, $str_delete);

    if ($res_delete) {
        echo "<p>Datensatz erfolgreich gelöscht.</p>";
    } else {
        echo "<p>Fehler beim Löschen des Datensatzes: " . mysqli_error($con_verbindung) . "</p>";
    }
}

echo "<form method='POST' action=''>";
echo "<input type='number' name='id' placeholder='ID' required><br>";
echo "<input type='submit' name='delete' value='Löschen'>";
echo "</form>";

// Beispiel 7: Datenbankabfrage mit Prepared Statements
echo "<h2>Beispiel 7: Datenbankabfrage mit Prepared Statements</h2>";

if (isset($_POST['submit'])) {
    $str_email = $_POST['email'];

    $stmt = mysqli_prepare($con_verbindung, "SELECT vorname, nachname FROM benutzer WHERE email = ?");
    mysqli_stmt_bind_param($stmt, 's', $str_email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $str_vorname, $str_nachname);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($str_vorname && $str_nachname) {
        echo "<p>Vorname: $str_vorname</p>";
        echo "<p>Nachname: $str_nachname</p>";
    } else {
        echo "<p>Kein Benutzer mit dieser E-Mail gefunden.</p>";
    }
}

echo "<form method='POST' action=''>";
echo "<input type='email' name='email' placeholder='E-Mail' required><br>";
echo "<input type='submit' name='submit' value='Suchen'>";
echo "</form>";

// Beispiel 8: Datenbanktransaktionen
echo "<h2>Beispiel 8: Datenbanktransaktionen</h2>";

mysqli_autocommit($con_verbindung, false);

$str_einfuegen_1 = "INSERT INTO benutzer (vorname, nachname, email) VALUES ('Max', 'Mustermann', 'max@example.com')";
$str_einfuegen_2 = "INSERT INTO benutzer (vorname, nachname, email) VALUES ('Anna', 'Musterfrau', 'anna@example.com')";

// Überprüfen, ob die E-Mail-Adressen bereits vorhanden sind
$check_email_query_1 = "SELECT COUNT(*) FROM benutzer WHERE email = 'max@example.com'";
$check_email_query_2 = "SELECT COUNT(*) FROM benutzer WHERE email = 'anna@example.com'";

$check_email_result_1 = mysqli_query($con_verbindung, $check_email_query_1);
$check_email_result_2 = mysqli_query($con_verbindung, $check_email_query_2);

// Wenn mysqli_fetch_array an Stelle [0] == 0, dann wurden keine Datensätze zurückgeliefert
$row_1 = mysqli_fetch_array($check_email_result_1);
$row_2 = mysqli_fetch_array($check_email_result_2);

if ($row_1[0] == 0 && $row_2[0] == 0) {
    $res_einfuegen_1 = mysqli_query($con_verbindung, $str_einfuegen_1);
    $res_einfuegen_2 = mysqli_query($con_verbindung, $str_einfuegen_2);

    if ($res_einfuegen_1 && $res_einfuegen_2) {
        mysqli_commit($con_verbindung);
        echo "<p>Datenbanktransaktion erfolgreich durchgeführt. (Max und Anna hinzugefügt)</p>";
    } else {
        mysqli_rollback($con_verbindung);
        echo "<p>Fehler bei der Datenbanktransaktion: " . mysqli_error($con_verbindung) . "</p>";
    }
} else {
    echo "<p>Eintrag existiert bereits.</p>";
}

mysqli_autocommit($con_verbindung, true);

// Beispiel 9: Komplette Tabelle löschen
echo "<h2>Beispiel 10: Komplette Tabelle löschen</h2>";

if (isset($_POST['delete_table'])) {
    $str_delete_table = "DROP TABLE benutzer";
    $res_delete_table = mysqli_query($con_verbindung, $str_delete_table);

    if ($res_delete_table) {
        echo "<p>Tabelle erfolgreich gelöscht. Bitte Seite neu laden um diese neu zu erzeugen und Fehler zu vermeiden.</p>";
    } else {
        echo "<p>Fehler beim Löschen der Tabelle: " . mysqli_error($con_verbindung) . "</p>";
    }
}

echo "<form method='POST' action=''>";
echo "<input type='submit' name='delete_table' value='Tabelle löschen'>";
echo "</form>";

mysqli_close($con_verbindung);
?>
