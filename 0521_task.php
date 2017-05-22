<?php
$a=1;
while ($a <=7) {
  if ($a <= 4) {
  $b=3;
  while ($b >= $a) {
    echo "&ensp;";
    $b--;
  }
  $c=1;
  while ($c <= $a) {
    echo "*";
    $c++;
  }
  $d=$c-2;
  while ($d >=1) {
  echo "*";
  $d--;
  }
  echo "<br />";
}
else if ($a >= 5) {
  $e = 5;
  while ($e <= $a) {
    echo "&ensp;";
    $e++;
  }
  $f =1;
  while ($f <= 8-$a) {
    echo "*";
    $f++;
  }
  $g = $f-2;
  while ($g >= 1) {
    echo "*";
    $g--;
  }
  echo "<br />";
}
$a++;
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

//    A
//   ABA
//  ABCBA
// ABCDCBA
//  ABCBA
//   ABA
//    A

//------- ----↓ program ↓--------------

$a=1;
while ($a <= 4) {
  $b=3;
  $z='A';
  while ($b >= $a) {
    echo "&ensp;";
    $b--;
  }
  $c=1;
  while ($c <= $a) {
    echo $z;
    $c++;
    $z++;
  }
  $x = chr(ord($z)-2);
  $d=1;
  while ($d < $a) {
    echo $x;
    $d++;
    $x = chr(ord($x)-1);
  }
  $a++;
  echo "<br>";
}
$a=1;
while ($a <= 3) {
  $c=1;
  while ($c <= $a) {
    echo "&ensp;";
    $c++;
  }
  $b=3;
  $z="A";
  while ($b >= $a) {
    echo $z;
    $b--;
    $z++;
  }
  $c=3;
  $x = chr(ord($z)-2);
  while ($c > $a) {
    echo $x;
    $c--;
    $x = chr(ord($x)-1);
  }
  $a++;
  echo "<br>";
}
 ?>
