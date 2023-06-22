<?php

// OOP in PHP

// Die Verwendung von __construct:

/**
 * Die Methode __construct ist ein sogenannter Konstruktor. Sie wird automatisch aufgerufen,
 * wenn eine neue Instanz einer Klasse erstellt wird. Der Konstruktor ermöglicht es,
 * initialen Code auszuführen und Eigenschaften einer Klasse mit Werten zu initialisieren.
 * 
 * In der Regel werden die erforderlichen Parameter im Konstruktor definiert, die dann bei der
 * Instanziierung der Klasse übergeben werden. Der Konstruktor wird dabei mit dem Schlüsselwort
 * "public function __construct()" deklariert und kann optional Parameter entgegennehmen.
 * 
 * Beispiel:
 * 
 * class Beispiel {
 *     private $name;
 * 
 *     public function __construct($name) {
 *         $this->name = $name;
 *     }
 * }
 * 
 * $beispiel = new Beispiel("Hallo");
 * 
 * In diesem Beispiel wird beim Erstellen einer neuen Instanz der Klasse "Beispiel" der Konstruktor
 * aufgerufen und der übergebene Name in der Eigenschaft $name gespeichert.
 */

// Die Verwendung von : und -> :

/**
 * In der OOP in PHP werden zwei spezielle Operatoren verwendet: ":" und "->".
 * 
 * Der ":"-Operator wird verwendet, um den Zugriff auf Eigenschaften oder Methoden einer Klasse
 * zu deklarieren. Er wird nach dem Namen der Klasse oder des Objekts platziert, gefolgt von
 * dem Namen der Eigenschaft oder Methode.
 * 
 * Beispiel:
 * 
 * class Beispiel {
 *     public $name;
 * 
 *     public function sagHallo() {
 *         echo "Hallo, " . $this->name;
 *     }
 * }
 * 
 * $beispiel = new Beispiel();
 * $beispiel->name = "Max";
 * $beispiel->sagHallo();
 * 
 * In diesem Beispiel wird die Eigenschaft $name des Objekts $beispiel auf "Max" gesetzt und
 * anschließend die Methode "sagHallo()" aufgerufen, um "Hallo, Max" auszugeben.
 * 
 * Der "->"-Operator wird verwendet, um auf Eigenschaften oder Methoden eines Objekts zuzugreifen.
 * Dabei wird das Objekt vor den Operator gestellt, gefolgt vom Namen der Eigenschaft oder Methode.
 * Der "->"-Operator ist somit Teil der Syntax, um auf Objekteigenschaften und -methoden zuzugreifen.
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

