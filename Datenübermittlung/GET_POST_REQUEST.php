<!DOCTYPE html>
<html>
<head>
    <title>GET, POST, REQUEST in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            margin-bottom: 10px;
            padding: 5px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 5px 10px;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h1>GET, POST, REQUEST in PHP</h1>

    <?php
    // Beispiel 1: Verwendung von GET
    echo "<h2>Beispiel 1: Verwendung von GET</h2>";
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "<p>Beispiel 1 - Name: $name</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<h3>Hallo, $name!</h3>";
    } else {
        echo "<p class='error'>Beispiel 1 - Kein Name übergeben. Bitte füge '?name=DeinName' zur URL hinzu.</p>";
    }
    ?>

    <form method="GET" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br>
        <input type="submit" value="Name senden">
    </form>

    <?php
    // Beispiel 2: Verwendung von POST
    echo "<h2>Beispiel 2: Verwendung von POST</h2>";
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo "<p>Beispiel 2 - E-Mail: $email</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<p>Deine E-Mail-Adresse: $email</p>";
    } else {
        echo "<p class='error'>Beispiel 2 - Keine E-Mail übergeben. Bitte verwende das E-Mail-Formular.</p>";
    }
    ?>

    <form method="POST" action="">
        <label for="email">E-Mail:</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="E-Mail senden">
    </form>

    <?php
    // Beispiel 3: Weiterleitung nach Formularabsendung
    echo "<h2>Beispiel 3: Weiterleitung nach Formularabsendung</h2>";
    if (isset($_POST['senden'])) {
        // Hier kannst du den Ziel-URL angeben, zu dem du weiterleiten möchtest
        $str_ziel_url = "GET_POST_REQUEST.php";

        // Benutzernamen aus dem Formular abrufen
        $name = $_POST['content'];

        // Weiterleitung, nachdem der "senden" Button geklickt wurde
        header("Location: $str_ziel_url?name=$name");
        exit(); // Beenden des Skripts nach der Weiterleitung
    }
    ?>

    <form method="POST" action="">
        <input type="text" name="content" placeholder="Benutzernamen eingeben">
        <br>
        <input type="submit" name="senden" value="Daten senden">
    </form>


    <?php
    // Beispiel 4: Überprüfung auf Existenz von GET-Daten
    echo "<h2>Beispiel 4: Überprüfung auf Existenz von GET-Daten</h2>";
    if (isset($_GET['suchbegriff'])) {
        $suchbegriff = $_GET['suchbegriff'];
        echo "<p>Beispiel 4 - Suchbegriff: $suchbegriff</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<h3>Suchergebnisse für '$suchbegriff'</h3>";
    } else {
        echo "<p class='error'>Beispiel 4 - Kein Suchbegriff übergeben. Bitte füge '?suchbegriff=DeinSuchbegriff' zur URL hinzu.</p>";
    }
    ?>

    <form method="GET" action="">
        <label for="suchbegriff">Suchbegriff:</label>
        <input type="text" name="suchbegriff" id="suchbegriff">
        <br>
        <input type="submit" value="Suchen">
    </form>

    <?php
    // Beispiel 5: Verwendung von REQUEST
    /*
    * $_REQUEST enthält sowohl die Daten von $_GET als auch von $_POST, sowie die Cookie-Daten.
    * Es ist wichtig zu beachten, dass $_REQUEST weniger sicher ist als die direkte Verwendung von $_GET oder $_POST,
    * da es zu Konflikten kommen kann, wenn beispielsweise eine Variable sowohl in $_GET als auch in $_POST vorhanden ist.
    */
    echo "<h2>Beispiel 5: Verwendung von REQUEST</h2>";
    if (isset($_REQUEST['request_data'])) {
        $request_data = $_REQUEST['request_data'];
        echo "<p>Beispiel 5 - Request-Daten: $request_data</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<p>Request-Daten: $request_data</p>";
    } else {
        echo "<p class='error'>Beispiel 5 - Keine Request-Daten übergeben. Bitte füge '?request_data=DeineDaten' zur URL hinzu oder verwende das Request-Formular.</p>";
    }
    ?>

    <form method="REQUEST" action="">
        <label for="request_data">Request-Daten:</label>
        <input type="text" name="request_data" id="request_data">
        <br>
        <input type="submit" value="Daten senden">
    </form>

    <?php
    // Beispiel 6: Verwendung von GET und POST
    echo "<h2>Beispiel 6: Verwendung von GET und POST</h2>";
    if (isset($_REQUEST['form_username']) && isset($_REQUEST['form_password'])) {
        $username = $_REQUEST['form_username'];
        $password = $_REQUEST['form_password'];

        echo "<p>Beispiel 6 - Benutzername: $username, Passwort: $password</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<p>Benutzername: $username</p>";
        echo "<p>Passwort: $password</p>";
    } else {
        echo "<p class='error'>Beispiel 6 - Kein Benutzername und/oder Passwort übergeben. Bitte verwende das Anmeldeformular.</p>";
    }
    ?>

    <form method="REQUEST" action="">
        <label for="form_username">Benutzername:</label>
        <input type="text" name="form_username" id="form_username">
        <br>
        <label for="form_password">Passwort:</label>
        <input type="password" name="form_password" id="form_password">
        <br>
        <input type="submit" value="Anmelden">
    </form>

    <?php
    // Beispiel 7: Verwendung von GET-Daten in Formular
    echo "<h2>Beispiel 7: Verwendung von GET-Daten in Formular</h2>";
    if (isset($_GET['form_name']) && isset($_GET['form_email'])) {
        $form_name = $_GET['form_name'];
        $form_email = $_GET['form_email'];

        echo "<p>Beispiel 7 - Formulardaten: Name: $form_name, E-Mail: $form_email</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<h3>Formulardaten:</h3>";
        echo "<p>Name: $form_name</p>";
        echo "<p>E-Mail: $form_email</p>";
    } else {
        echo "<p class='error'>Beispiel 7 - Kein Name und/oder E-Mail übergeben. Bitte füge '?form_name=DeinName&form_email=DeineEmail' zur URL hinzu oder verwende das Formular.</p>";
    }
    ?>

    <form method="GET" action="">
        <label for="form_name">Name:</label>
        <input type="text" name="form_name" id="form_name">
        <br>
        <label for="form_email">E-Mail:</label>
        <input type="email" name="form_email" id="form_email">
        <br>
        <input type="submit" value="Daten senden">
    </form>

    <?php
    // Beispiel 8: Verwendung von POST-Daten in Formular
    echo "<h2>Beispiel 8: Verwendung von POST-Daten in Formular</h2>";
    if (isset($_POST['form_username']) && isset($_POST['form_password'])) {
        $form_username = $_POST['form_username'];
        $form_password = $_POST['form_password'];

        echo "<p>Beispiel 8 - Formulardaten: Benutzername: $form_username, Passwort: $form_password</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<p>Benutzername: $form_username</p>";
        echo "<p>Passwort: $form_password</p>";
    } else {
        echo "<p class='error'>Beispiel 8 - Kein Benutzername und/oder Passwort übergeben. Bitte verwende das Anmeldeformular.</p>";
    }
    ?>

    <form method="POST" action="">
        <label for="form_username">Benutzername:</label>
        <input type="text" name="form_username" id="form_username">
        <br>
        <label for="form_password">Passwort:</label>
        <input type="password" name="form_password" id="form_password">
        <br>
        <input type="submit" value="Anmelden">
    </form>

    <?php
    // Beispiel 9: Verwendung von GET-Daten in Button
    echo "<h2>Beispiel 9: Verwendung von GET-Daten in Button</h2>";
    if (isset($_GET['button_data'])) {
        $button_data = $_GET['button_data'];
        echo "<p>Beispiel 9 - Button-Daten: $button_data</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<p>Button-Daten: $button_data</p>";
    } else {
        echo "<p class='error'>Beispiel 9 - Keine Button-Daten übergeben. Bitte füge '?button_data=DeineDaten' zur URL hinzu oder klicke auf den Button.</p>";
    }
    ?>

    <form method="GET" action="">
        <input type="hidden" name="button_data" value="Button-Daten">
        <button type="submit" class="button">Button-Daten senden</button>
    </form>

    <?php
    // Beispiel 10: Verwendung von POST-Daten in Button
    echo "<h2>Beispiel 10: Verwendung von POST-Daten in Button</h2>";
    if (isset($_POST['button_data'])) {
        $button_data = $_POST['button_data'];
        echo "<p>Beispiel 10 - Button-Daten: $button_data</p>";

        // Beispiel für Änderung der sichtbaren Inhalte auf der HTML-Seite
        echo "<p>Button-Daten: $button_data</p>";
    } else {
        echo "<p class='error'>Beispiel 10 - Keine Button-Daten übergeben. Bitte klicke auf den Button.</p>";
    }
    ?>

    <form method="POST" action="">
        <input type="hidden" name="button_data" value="Button-Daten">
        <input type="submit" value="Button-Daten senden">
    </form>

</body>
</html>
