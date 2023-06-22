<?php
require_once "NutzerloginFunctions.php";

session_start();

// Registrierungsformular
if (isset($_POST['registrieren'])) {
    // Nutzerdaten aus Formular auslesen
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $benutzername = $_POST['benutzername'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $geburtstag = $_POST['geburtstag'];

    // Nutzer registrieren
    nutzer_registrieren($email, $passwort, $benutzername, $vorname, $nachname, $geburtstag);
}

// Anmeldeformular
if (isset($_POST['anmelden'])) {
    // Nutzerdaten aus Formular auslesen
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];

    // Nutzer anmelden
    nutzer_anmelden($email, $passwort);
}

// Abmeldebutton
if (isset($_POST['abmelden'])) {
    // Nutzer abmelden
    nutzer_abmelden();
}

// Löschbutton
if (isset($_POST['loeschen'])) {
    // Nutzer löschen
    nutzer_loeschen($_SESSION['angemeldeter_nutzer']['benutzerid']);
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benutzerseite</title>
</head>
<body>
    <h1>Benutzerseite</h1>
    
    <?php if (ist_angemeldet()): ?>
        <?php if (ist_admin()): ?>
            <?php nutzerdaten_anzeigen(); ?>
        <?php else: ?>
            <?php persoenliche_daten_anzeigen(); ?>
        <?php endif; ?>
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="abmelden" value="Abmelden">
        </form>
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="loeschen" value="Nutzer löschen">
        </form>
    <?php else: ?>
        <h2>Registrieren</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort" required>
            <br>
            <label for="benutzername">Benutzername:</label>
            <input type="text" name="benutzername" id="benutzername" required>
            <br>
            <label for="vorname">Vorname:</label>
            <input type="text" name="vorname" id="vorname" required>
            <br>
            <label for="nachname">Nachname:</label>
            <input type="text" name="nachname" id="nachname" required>
            <br>
            <label for="geburtstag">Geburtstag:</label>

            
            <input type="date" min="<?php echo date('Y-m-d', strtotime('-70 years')); ?>" max="<?php echo date('Y-m-d', strtotime('-18 years')); ?>" name="geburtstag" id="geburtstag" required>
            <br>
            <input type="submit" name="registrieren" value="Registrieren">
        </form>
        
        <h2>Anmelden</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort" required>
            <br>
            <input type="submit" name="anmelden" value="Anmelden">
        </form>
    <?php endif; ?>
</body>
</html>