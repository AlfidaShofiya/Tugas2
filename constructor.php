<?php
class Restaurant {
  public $Restaurant;
  public $Alamat;

  function __construct($Restaurant, $Alamat) {
    $this->Restaurant = $Restaurant;
    $this->Alamat = $Alamat;
  }
  function get_Restaurant() {
    return $this->Restaurant;
  }
  function get_Alamat() {
    return $this->Alamat;
  }
}

$Saratoga = new Restaurant("Saratoga", "Jln. Manyar no 46 Madiun");
echo $Saratoga->get_Restaurant();
echo "<br>";
echo $Saratoga->get_Alamat();
?>