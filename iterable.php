<?php
function getIterable():iterable {
  return ["nasi goreng, salad, seblak"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
?>