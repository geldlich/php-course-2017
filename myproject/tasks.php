<?
//1

for ($i = 0; $i < 10; $i++) {
	echo ($i + 1)  .  " Hello" . "<br>";
}

// 2
/*$z  = 0;
$x = 1;
while ($x <= 112) { 
 	$z += $x;
 	$x += 3;
 }
echo " $z";
	
// */
echo "<br>";
echo "<br>";

$z = 0;

for ($x = 1; $x <=112; $x += 3){
	$z += $x;
}
echo " $z";
echo "<br>";
// 3



echo "<br>";
$q = (string) 0;
$w = (string) 3;
 

while ( $q <= 10000 ) {
	if ( (( $q % 5 ) > 0) && ( ($rez = strpos ($q, $w)) !== false)){
		echo " $q";
	}
	++$q;
}

//4
echo "<br>";
echo "<br>";
$r = 1;
while ($r <= 3) {
 	echo rand (0, 100) . "<br>";
 	++$r;
}

//5
echo "<br>";
echo "<br>";
for ($n = 35; $n <= 87; ++$n) {
	if ((($n / 7) == 1 ) ||  (($n / 7) == 2 ) || (($n / 7) == 5 )){
		echo " $n";
	}
}


//6
echo "<br>";
echo "<br>";
for ($n = 35; $n <= 87; ++$n) {
	if ((($n / 7) == 1 ) ||  (($n / 7) == 2 ) || (($n / 7) == 5 )){
		echo " $n";
	}
}





?>