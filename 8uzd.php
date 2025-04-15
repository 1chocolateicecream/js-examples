<?php
class Auto {
    public $marka;
    public $modelis;
    public $gads;

    public function __construct($marka, $modelis, $gads) {
        $this->marka = $marka;
        $this->modelis = $modelis;
        $this->gads = $gads;
    }

    public function showInfo() {
        return "Auto: $this->marka $this->modelis ($this->gads)";
    }
}

$auto1 = new Auto('Toyota', 'Corolla', 2015);
$auto2 = new Auto('BMW', 'X5', 2021);

echo "<p>" . $auto1->showInfo() . "</p>";
echo "<p>" . $auto2->showInfo() . "</p>";
?>
