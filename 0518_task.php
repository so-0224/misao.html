<?php
for($x = 1 ; $x <= 4 ; $x ++){
  for($y = 1 ; $y <= 4 ; $y ++){
    echo '*';
  }
  echo "<br />";
}
 ?>

<?php
for ($a = 5; $a >= 1; $a--) {
  for ($b=1; $b<=$a ; $b++) {
    echo "*";
  }
  echo "<br />";
}
 ?>

<?php
for ($a=5; $a >=1 ; $a--) {
  for ($b=5; $b >=$a ; $b--) {
    echo "*";
  }
  echo "<br />";
}
 ?>

 <?php
 for ($i=1; $i <= 5 ; $i++) {
   for ($a=1; $a < $i ; $a++) {
     echo "-";
   }
   for ($b=5; $b >= $i ; $b--) {
     echo "*";
   }
   echo "<br>";
 }
  ?>

  <?php
  for ($i=1; $i <= 5 ; $i++) {
    for ($a=5; $a > $i ; $a--) {
      echo "-";
    }
    for ($b=1; $b <= $i ; $b++) {
      echo "*";
    }

    echo "<br>";
   ?>
  

<?php

for ($i=1; $i <= 4 ; $i++) {
  for ($a=4; $a > $i ; $a--) {
    echo "-";
  }
  for ($b=1; $b <= $i ; $b++) {
    echo "*";
  }
  for ($c=1; $c < $i ; $c++) {
    echo "*";
  }

  echo "<br>";
}

 ?>
