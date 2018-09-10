<?php
function rekursifBintang1($p) {
  $p--;
  if ($p > 0)rekursifBintang1($p);
	echo "*";
}
function rekursifBintang2($p){
  rekursifBintang1($p);
  echo "<br>";
  $p--;
  if($p>0)
    rekursifBintang2($p);
}
	rekursifBintang2(7);
echo "<br>=========================================== <br><br>";


?>
