140916 <br>

<?php

  $age = 5;

  if ($age < 18){
    echo "Alaealine";
  }
  else {
    echo "Täisealine";
  }

  echo "<br>";

  for ($vanus=1; $vanus <= 5 ; $vanus++) {
    echo $vanus."Palju";
  }

  echo "Õnne!<br>";

  echo date("d.m.y-h:i:s-D");


?>
