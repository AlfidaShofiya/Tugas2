<?php
class Restaurant {
  public $Restaurant;
  public $Alamat;
  public $weight;

  // method declaration
    public function berjalan() {
        echo 'Restaurant Saratoga';
    }

  function set_Restaurant($n) {  // a public function (default)
    $this->Restaurant = $n;
  }
  public function set_Alamat($n) { // a public function
    $this->Alamat = $n;
  }
  public function set_weight($n) { // a public function
    $this->weight = $n;
  }
} 

$mango = new Restaurant();
$mango->set_Restaurant('Saratoga'); // OK
$mango->set_Alamat('Jln. Manyar no 46 Madiun'); // OK
$mango->set_weight('300'); // OK
$mango->'Restaurant Saratoga';
?>
