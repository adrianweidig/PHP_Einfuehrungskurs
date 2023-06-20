<!DOCTYPE html>
<html>
<head>
    <title>ASCII Tannenbaum</title>
    <style>
        .centered-text {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="centered-text">
        <?php
        $baumhoehe = 6;
        $stammhoehe = 4;

        for ($zeile = 1; $zeile <= $baumhoehe; $zeile++) {
            // Baumzeichen
            for ($stern = 1; $stern <= (2 * $zeile - 1); $stern++) {
                echo "x";
            }

            echo "<br>";
        }

        // Stamm des Baums
        for ($zeile = 1; $zeile <= $stammhoehe; $zeile++) {
            echo "xx<br>";
        }
        ?>
    </div>
</body>
</html>
