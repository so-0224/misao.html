<?php
// 1
// 21
// 321
//------------↓ program ↓--------------

for ($i=1; $i <= 3 ; $i++) {
  for ($a=$i; $a >= 1 ; $a--) {
    echo $a;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// ***1
// **121
// *12321
// 1234321
//------------↓ program ↓--------------

for ($i=1; $i <=4 ; $i++) {
  for ($a=3; $a >= $i ; $a--) {
    echo "*";
  }
  for ($b=1; $b <= $i ; $b++) {
    echo "$b";
  }
  $d=$a;
  for ($c=1; $c < $i; $c++) {
    echo $d;
    $d--;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// 1
// 12
// 123
//------------↓ program ↓--------------

for ($i=1; $i <=3 ; $i++) {
  for ($a=1; $a <=$i ; $a++) {
    echo $a;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// 1
// 23
// 456
//------------↓ program ↓--------------
$z=1;
for ($i=1; $i <=3 ; $i++) {
  for ($a= 1; $a <=$i ; $a++) {
    echo $z;
    $z++;
  }
 echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// 321
// 21
// 1

//------------↓ program ↓--------------

for ($i= 1; $i <= 3 ; $i++) {
  for ($a=4; $a >= $i+1 ; $a--) {
    echo $a-$i;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// 123
// *12
// **1

//------------↓ program ↓--------------

for ($i=3; $i >=1 ; $i--) {
  for ($a=2; $a >= $i ; $a--) {
    echo "*";
  }
  for ($b=1; $b <=$i ; $b++) {
    echo $b;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// 6
// 54
// 321

//------------↓ program ↓--------------
  $x=6;
for ($i=1; $i <= 3; $i++) {
  for ($a= 1; $a <= $i; $a++) {
    echo $x;
    $x--;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// 1234321
// *12321
// **121
// ***1

//------------↓ program ↓--------------


for($a = 4 ; $a >= 1 ; $a--){
  for($b = 3 ; $b >= $a ; $b--){
    echo "*";
  }
  for($c = 1 ; $c <=$a ; $c++){
    echo $c;
  }
  for($d = $c-2 ; $d >=1  ; $d --){
    echo $d;
  }
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// ****1
// ***121
// **12321
// *1234321
// 123454321
// *1234321
// **12321
// ***121
// ****1
//------------↓ program ↓--------------
for($a = 1 ; $a <= 9 ; $a ++){
  if($a <= 5){
    for($b = 4 ; $b >= $a ; $b --){
      echo "*";
    }
    for($c = 1; $c <= $a ; $c++){
      echo $c;
    }
    for($d =$c -2 ; $d >= 1 ; $d--){
      echo $d;
    }
    echo "<br />";
  }
  else if($a >=6 ){
    for($e = 6 ; $e <= $a ; $e++){
      echo "*";
    }
    for($f = 1 ; $f <=10-$a  ; $f++){
      echo $f;
    }
    for($g = $f-2 ; $g >=1  ; $g --){
      echo $g;
    }
  echo "<br />";
  }
}


//--------------------------------------
  echo "<br><br>";
//--------------------------------------

// ****5
// ***545
// **54345
// *5432345
// 543212345

//------------↓ program ↓--------------

for($a = 5 ; $a >= 1 ; $a --){
  for($b = 2 ; $b <= $a; $b ++){
    echo "*";
  }
  for($c = 5 ; $c >= $a ;$c --){
    echo $c;
  }
  for($d = $c+2 ; $d <= 5   ; $d ++){
    echo $d;
  }
  echo "<br />";
}
 ?>
