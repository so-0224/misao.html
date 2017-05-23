
<?php
$a =array(7,2,4,9,12,11,15,14,10);
$num =count($a);
 echo "Origin:";
for ($i=0; $i< $num; $i++){
  echo $a[$i];
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

sort($a);
for ($i=0; $i < $num; $i++) {
  echo $a[$i];
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

rsort($a);
for ($i=0; $i < $num; $i++) {
  echo $a{$i};
  echo "<br />";
}

//--------------------------------------
  echo "<br><br>";
//--------------------------------------

$a = array(7,2,4,9,12,11,15,14,10);
$num = count($a);
$b=$num-1;
for ($i=0; $i < $num; $i++) {
  $c[$b] = $a[$i];
  $b--;
}
for ($i=0; $i < $num ; $i++) {
  echo $c[$i];
  echo "<br />";
}
  //--------------------------------------
    echo "<br><br>";
  //--------------------------------------
$id =array(1,2,3,4,5,6,7,8);
$name = array("So","Yoshiki","Sonu","Taiki","Takeru","Kota","Dai","Kent");
$phonenum = array(111,222,333,444,555,666,777,888 );
$city = array("Okayama","Kagoshima","Hisar","Osaka","Saitama","Tokyo","Wakayama","Chiba");
$course = array("php","php","Japanese","English","English","Ruby","English","English");
$country = array("Japan","Japan","India","Japan","Japan","Japan","Japan","Japan" );
$num = count($id);
for ($i=0; $i < $num; $i++) {
  echo $id[$i]. " " .$name[$i]. " " .$phonenum[$i]. " " .$city[$i]. " " .$course[$i]. " " .$country[$i]. "<br>";
 ?>
