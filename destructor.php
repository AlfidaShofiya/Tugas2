<?php
class Restaurant {
  public $Restaurant;
  public $Alamat;

  function __construct($Restaurant, $Alamat) {
    $this->Restaurant = $Restaurant;
    $this->Alamat = $Alamat;
  }
  function __destruct() {
    echo "Ini adalah sebuah Restaurant {$this->Restaurant} letak nya berada di {$this->Alamat}.";
  }
}

$apple = new Restaurant("Saratoga", "Jln. Manyar no 46 Madiun");
?>
