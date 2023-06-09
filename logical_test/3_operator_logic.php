<?php
function pembagian(int $angka1, int $angka2) 
{
	$i = 0;   
    while($angka1 >= $angka2){
    	$angka1 -= $angka2;
        $i+=1;
    }
  return $i;
}
echo '9 : 3 = ' . pembagian(9,3).'<br>';
echo '10 : 4 = ' . pembagian(10,4).'<br>';
?>