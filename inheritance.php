<?php
class Restaurant{
  public $Restaurant;
  public $Alamat;
  public function __construct($Restaurant, $Alamat) {
    $this->Restaurant = $Restaurant;
    $this->Alamat = $Alamat;
  }
  public function intro() {
    echo "Iya ini adalah restaurant {$this->Restaurant} terletak di {$this->Alamat}.";
  }
}

// Saratoga is inherited from Restaurant
class Saratoga extends Restaurant {
  public function message() {
    echo "Apakah ini Restaurant? ";
  }
}
$Saratoga = new Saratoga("Saratoga", "Jln. Manyar no 46 Madiun");
$Saratoga->message();
$Saratoga->intro();
?>