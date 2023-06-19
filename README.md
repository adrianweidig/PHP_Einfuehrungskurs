# PHP-Einführungskurs

Willkommen zum PHP-Einführungskurs! Dieser Kurs bietet eine grundlegende Einführung in die PHP-Programmierung.

## Inhalte

- Einführung in PHP-Syntax und Grundlagen
- Arbeiten mit Variablen, Arrays und Funktionen
- Datenbankintegration mit PHP und MySQL
- Formularverarbeitung und Datenvalidierung
- Einbindung von externen Bibliotheken und Frameworks

## Anleitung zur Verwendung von Visual Studio Code

Visual Studio Code ist ein beliebter Code-Editor, der sich gut zur PHP-Entwicklung eignet. Hier ist eine kurze Anleitung, wie du Visual Studio Code für das Programmieren und Debuggen von PHP einrichten kannst:

1. Installiere Visual Studio Code: Lade die neueste Version von Visual Studio Code von der offiziellen Website herunter und installiere sie auf deinem Computer.

2. Installiere die benötigten Erweiterungen: Öffne Visual Studio Code und gehe zum Extensions Marketplace (Symbolleiste auf der linken Seite). Suche nach und installiere die folgenden Erweiterungen:
   - PHP Intelephense: Bietet intelligentes PHP-Code-Editing, Autovervollständigung und mehr.
   - PHP Debug: Ermöglicht das Debuggen von PHP-Code in Visual Studio Code.

3. Erstelle ein PHP-Projekt: Lege ein Verzeichnis für dein PHP-Projekt an und öffne es in Visual Studio Code.

4. Konfiguriere die `launch.json`-Datei: Klicke auf den Debugging-Reiter (Symbolleiste auf der linken Seite) und wähle das Zahnradsymbol, um die Debug-Konfigurationen zu öffnen. Wähle "PHP" und speichere die `launch.json`-Datei.

5. Passe die `launch.json`-Konfiguration an: In der `launch.json`-Datei kannst du die Einstellungen für den PHP-Debugger anpassen, z. B. den Host, den Port und den Pfad zur `php.exe`. Hier ist ein Beispiel für eine Konfiguration:

```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Debug PHP",
            "type": "php",
            "request": "launch",
            "port": 9000,
            "pathMappings": {
                "/var/www/html": "${workspaceFolder}"
            }
        }
    ]
}
```

6. Starte den Debugger: Öffne deine PHP-Datei in Visual Studio Code, setze Breakpoints und klicke auf den grünen Start-Button in der oberen Symbolleiste oder verwende die Tastenkombination F5, um den Debugger zu starten.

Jetzt bist du bereit, mit Visual Studio Code PHP zu programmieren und zu debuggen!

## Anpassen der settings.json

Die settings.json-Datei in Visual Studio Code ermöglicht es dir, verschiedene Einstellungen anzupassen. Um die PHP-spezifischen Einstellungen festzulegen, folge diesen Schritten:

1. Öffne Visual Studio Code und gehe zu "Datei" > "Einstellungen" > "Einstellungen" (oder verwende die Tastenkombination Strg + ,).

2. Wähle die Option "Einstellungen öffnen" (Symbol mit geschweiften Klammern oben rechts) aus, um die settings.json-Datei zu öffnen.

3. Füge die folgenden Einstellungen hinzu, um PHP-spezifische Konfigurationen festzulegen:

```json
{
    "php.validate.executablePath": "C:\\Users\\dein_username\\Pfad\\zur\\php.exe",
    "php.executablePath": "C:\\Users\\dein_username\\Pfad\\zur\\php.exe"
}
```

Stelle sicher, dass du den tatsächlichen Pfad zur php.exe-Datei in deinem System angibst.

4. Speichere die settings.json-Datei.

Diese Einstellungen ermöglichen es Visual Studio Code, die PHP-Validierung und das Ausführen der PHP-Dateien mit der richtigen PHP-Executable durchzuführen.

Hinweis: Die settings.json-Datei kann auch durch die Verwendung des Befehls "Datei" > "Voreinstellungen" > "Einstellungen" (oder Strg + ,) geöffnet und bearbeitet werden.

Das war's! Du kannst nun Visual Studio Code verwenden, um PHP zu programmieren und zu debuggen, während du die spezifischen Einstellungen in der settings.json-Datei anpasst.