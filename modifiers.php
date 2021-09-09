<?php
interface Restaurant {
  public function makeSound();
}

class Cat implements Restaurant {
  public function makeSound() {
    echo "Saratoga";
  }
}

$Restaurant = new Cat();
$Restaurant->makeSound();
?>