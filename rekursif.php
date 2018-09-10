<?php
function rekursif($p) {
  $p--;
  if ($p > 0)rekursif($p);
	echo "*";
}
function rekursif2($p){
  rekursif($p);
  echo "<br>";
  $p--;
  if($p>0)
    rekursif2($p);
}
	rekursif2(10);
echo "<br>=========================================== <br><br>";

?>
