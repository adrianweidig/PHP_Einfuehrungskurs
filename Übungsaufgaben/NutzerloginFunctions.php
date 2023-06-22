<?php
// Datenbankverbindung herstellen
function db_verbinden()
{
    $verbindung = mysqli_connect("localhost", "root", "", "schulung");
    
    // Verbindung überprüfen
    if (mysqli_connect_errno()) {
        die("Datenbankverbindung fehlgeschlagen: " . mysqli_connect_error());
    }
    
    return $verbindung;
}

// Tabelle löschen, falls vorhanden
function tabelle_loeschen()
{
    $verbindung = db_verbinden();
    
    $sql = 'DROP TABLE IF EXISTS benutzer';
    
    if (!mysqli_query($verbindung, $sql)) {
        die("Fehler beim Löschen der Nutzertabelle: " . mysqli_error($verbindung));
    }
    
    mysqli_close($verbindung);
}

// Nutzertabelle erstellen
function nutzertabelle_erstellen()
{

    $verbindung = db_verbinden();
    
    $sql = 'CREATE TABLE IF NOT EXISTS benutzer (
        benutzerid INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(320) NOT NULL,
        passwort VARCHAR(255) NOT NULL,
        vorname VARCHAR(30) NOT NULL,
        nachname VARCHAR(50) NOT NULL,
        benutzername VARCHAR(30) NOT NULL,
        geburtstag DATE NOT NULL,
        CONSTRAINT UK_benutzer_email UNIQUE (email),
        CONSTRAINT UK_benutzer_benutzername UNIQUE (benutzername)
    )';
    
    if (!mysqli_query($verbindung, $sql)) {
        die("Fehler beim Erstellen der Nutzertabelle: " . mysqli_error($verbindung));
    }
    
    mysqli_close($verbindung);
}

// Überprüfen, ob Nutzer angemeldet ist
function ist_angemeldet()
{
    return isset($_SESSION['angemeldeter_nutzer']);
}

// Überprüfen, ob Nutzer Admin ist
function ist_admin()
{
    if (isset($_SESSION['angemeldeter_nutzer']) && $_SESSION['angemeldeter_nutzer']['benutzername'] === 'admin') {
        return true;
    } else {
        return false;
    }
}

// Nutzer registrieren
function nutzer_registrieren($email, $passwort, $benutzername, $vorname, $nachname, $geburtstag)
{
    $verbindung = db_verbinden();
    
    $email = mysqli_real_escape_string($verbindung, $email);
    $benutzername = mysqli_real_escape_string($verbindung, $benutzername);
    $vorname = mysqli_real_escape_string($verbindung, $vorname);
    $nachname = mysqli_real_escape_string($verbindung, $nachname);
    $geburtstag = mysqli_real_escape_string($verbindung, $geburtstag);
    
    // Passwort verschlüsseln
    $passwort_hash = password_hash($passwort, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO benutzer (email, passwort, benutzername, vorname, nachname, geburtstag)
            VALUES ('$email', '$passwort_hash', '$benutzername', '$vorname', '$nachname', '$geburtstag')";
    
    if (!mysqli_query($verbindung, $sql)) {
        die("Fehler beim Registrieren des Nutzers: " . mysqli_error($verbindung));
    }
    
    mysqli_close($verbindung);
}

// Nutzer anmelden
function nutzer_anmelden($email, $passwort)
{
    $verbindung = db_verbinden();
    
    $email = mysqli_real_escape_string($verbindung, $email);
    
    $sql = "SELECT * FROM benutzer WHERE email = '$email'";
    $ergebnis = mysqli_query($verbindung, $sql);
    
    if (mysqli_num_rows($ergebnis) == 1) {
        $nutzer = mysqli_fetch_assoc($ergebnis);
        
        // Passwort überprüfen
        if (password_verify($passwort, $nutzer['passwort'])) {
            $_SESSION['angemeldeter_nutzer'] = $nutzer;
        } else {
            die("Anmeldung fehlgeschlagen.");
        }
    } else {
        die("Anmeldung fehlgeschlagen.");
    }
    
    mysqli_close($verbindung);
}

// Nutzer abmelden
function nutzer_abmelden()
{
    unset($_SESSION['angemeldeter_nutzer']);
    session_destroy();
}

// Nutzer löschen
function nutzer_loeschen($benutzerid)
{
    $verbindung = db_verbinden();
    
    $benutzerid = mysqli_real_escape_string($verbindung, $benutzerid);
    
    $sql = "DELETE FROM benutzer WHERE benutzerid = '$benutzerid'";
    
    if (!mysqli_query($verbindung, $sql)) {
        die("Fehler beim Löschen des Nutzers: " . mysqli_error($verbindung));
    }
    
    mysqli_close($verbindung);
}

// Persönliche Daten anzeigen
function persoenliche_daten_anzeigen()
{
    if (ist_angemeldet()) {
        $nutzer = $_SESSION['angemeldeter_nutzer'];

        // HTML-Code für die Darstellung der persönlichen Daten
        echo "<h2>Persönliche Daten</h2>";
        echo "<p>Email: " . $nutzer['email'] . "</p>";
        echo "<p>Benutzername: " . $nutzer['benutzername'] . "</p>";
        echo "<p>Vorname: " . $nutzer['vorname'] . "</p>";
        echo "<p>Nachname: " . $nutzer['nachname'] . "</p>";
        echo "<p>Geburtstag: " . $nutzer['geburtstag'] . "</p>";
    }
}

// Tabelle aller Nutzerdaten anzeigen (nur für Admin)
function nutzerdaten_anzeigen()
{
    if (ist_angemeldet() && ist_admin()) {
        $verbindung = db_verbinden();

        $sql = "SELECT * FROM benutzer";
        $ergebnis = mysqli_query($verbindung, $sql);

        // HTML-Code für die Tabellendarstellung der Nutzerdaten
        echo "<h2>Alle Nutzerdaten</h2>";
        echo "<table>";
        echo "<tr><th>Nutzer ID</th><th>Email</th><th>Benutzername</th><th>Vorname</th><th>Nachname</th><th>Geburtstag</th></tr>";

        while ($row = mysqli_fetch_assoc($ergebnis)) {
            echo "<tr>";
            echo "<td>" . $row['benutzerid'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['benutzername'] . "</td>";
            echo "<td>" . $row['vorname'] . "</td>";
            echo "<td>" . $row['nachname'] . "</td>";
            echo "<td>" . $row['geburtstag'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";

        mysqli_close($verbindung);
    }
}
?>
