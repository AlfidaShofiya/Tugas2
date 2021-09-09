<?php
class Restaurant  {
  // Properties
  public $Restaurant;
  public $Alamat;

  // Methods
  function set_Restaurant($Restaurant) {
    $this->Restaurant = $Restaurant;
  }
  function get_Restaurant() {
    return $this->Restaurant;
  }
  function set_Alamat($Alamat) {
    $this->Alamat = $Alamat;
  }
  function get_Alamat() {
    return $this->Alamat;
  }
}

$Saratoga = new Restaurant ();
$Saratoga->set_Restaurant('Saratoga');
$Saratoga->set_Alamat('Jln. Manyar no 46 Madiun');
echo "Name: " . $Saratoga->get_Restaurant();
echo "<br>";
echo "Alamat: " . $Saratoga->get_Alamat();
?>