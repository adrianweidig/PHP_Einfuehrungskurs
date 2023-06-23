<?php

// OOP in PHP

// Die Verwendung von __construct:

/**
 * Die __construct-Funktion wird automatisch aufgerufen, wenn eine neue Instanz einer Klasse erstellt wird.
 * Er ermöglicht die Ausführung von Initialisierungscode und die Initialisierung von Klasseneigenschaften mit Werten.
 * 
 * Diese wird auch Konstruktor genannt.
 * 
 * In der Regel werden die erforderlichen Parameter im Konstruktor definiert und bei der Instanziierung der Klasse übergeben.
 * Der Konstruktor wird mit dem Schlüsselwort "public function __construct()" deklariert und kann optional Parameter entgegennehmen.
 */

// Die Verwendung von : und -> :

/**
 * In der OOP in PHP werden zwei spezielle Operatoren verwendet: ":" und "->".
 * 
 * Der "->"-Operator wird verwendet, um auf Eigenschaften oder Methoden eines Objekts zuzugreifen.
 * 
 * Der "::"-Operator wird verwendet, um auf statische Eigenschaften oder Methoden einer Klasse zuzugreifen.
 * Statische Eigenschaften und Methoden sind an die Klasse selbst gebunden und können direkt über den Klassennamen und den "::"-Operator aufgerufen werden.
 */

class Tier {
    protected $str_name;
    protected $int_alter;

    public function __construct($name, $alter) {
        $this->str_name = $name;
        $this->int_alter = $alter;
    }

    public function vorstellen() {
        echo "Ich bin ein Tier namens " . $this->str_name . " und bin " . $this->int_alter . " Jahre alt.";
    }
}

class Katze extends Tier {
    private $str_fellfarbe;

    public function __construct($name, $alter, $fellfarbe) {
        // Hiermit wird also der Konstruktor der Tierklasse aufgerufen
        parent::__construct($name, $alter);
        $this->str_fellfarbe = $fellfarbe;
    }

    public function schnurren() {
        echo $this->str_name . " schnurrt.";
    }
}

class Hund extends Tier {
    private $str_rasse;

    public function __construct($name, $alter, $rasse) {
        parent::__construct($name, $alter);
        $this->str_rasse = $rasse;
    }

    public function bellen() {
        echo $this->str_name . " bellt.";
    }
}

// Beispiele

// Katze erstellen und vorstellen
$katze = new Katze("Minka", 3, "getigert");
$katze->vorstellen();

// Hund erstellen und vorstellen
$hund = new Hund("Bello", 5, "Labrador");
$hund->vorstellen();

// Katze schnurren lassen
$katze->schnurren();

// Hund bellen lassen
$hund->bellen();

?>

<!-- HTML-Formular und Button für ein Beispiel -->

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="alter">Alter:</label>
    <input type="number" name="alter" id="alter" required>
    <br>
    <label for="fellfarbe">Fellfarbe:</label>
    <input type="text" name="fellfarbe" id="fellfarbe" required>
    <br>
    <input type="submit" name="katze_erstellen" value="Katze erstellen">
</form>

<?php

// Beispiel: Katze erstellen über HTML-Formular
if (isset($_POST['katze_erstellen'])) {
    $name = $_POST['name'];
    $alter = $_POST['alter'];
    $fellfarbe = $_POST['fellfarbe'];

    $neue_katze = new Katze($name, $alter, $fellfarbe);
    $neue_katze->vorstellen();
}
?>

