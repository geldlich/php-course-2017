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
/*

//6
echo "<br>";
echo "<br>";

$fivescore_thousand = 0;
$decade_thousand = 0;
$thousand = 0;
$fivescore = 0;
$decade = 0;
$units = 0;
$n = 0;
$lucky = 0;

while ($n < 999999) {
	if ($units <= 9){
		$units++;
	}
	
	if ($units > 9){
		$decade++; 
		$units = $units - 10;

	}
	if ($decade > 9){
		$fivescore++;
		$decade = $decade - 10;
	}
	if ($fivescore > 9){
		$thousand++;
		$fivescore = $fivescore - 10;
	}
	if ($thousand > 9){
		$decade_thousand++;
		$thousand = $thousand - 10;
	}
	if ($decade_thousand > 9){
		$fivescore_thousand++;
		$decade_thousand = $decade_thousand - 10;
	}

	$r = "$fivescore" . "$decade" . "$units" ;
	$l = "$fivescore_thousand" . "$decade_thousand" . "$thousand";


	if (($fivescore + $decade + $units) == ($fivescore_thousand + $decade_thousand + $thousand) ){

		echo " $l " . " $r " . "/";
		$lucky++;
	}

	$n++;
}
echo "<br>";
echo "<h3>Winning tickets - $lucky</h3>";
$percent = (integer)(($lucky / $n) * 100);
echo "<h4> It is $percent%</h4>";	*/

//7
echo "<br>";
echo "<br>";
for ($s = 0; $s < 20; $s++){
	if ($s % 2 == 1){
		$n = 1;
	}
	else {
		$n = 0;
	}
	$array_n [] = $n; 

}
var_dump($array_n);

//8
echo "<br>";
echo "<br>";

for ($d = 0; $d <10; $d++){
	$pow = pow($d, 2);
	$list[] = $pow;

}

var_dump($list);


//8
echo "<br>";
echo "<br>";

$array_s = [1, 2, 3, 4, 5, 6];
echo "<b>Sum of elements (function): </b>" . array_sum($array_s);
echo "<br>";

$result1 = reset($array_s);
for ($i = 1, $c = count($array_s); $i < $c; ++$i) {
	$result1 += $array_s[$i];
	}
echo "<b>Sum of elements: </b>" . $result1;

echo "<br>";
$result2 = reset($array_s);
for ($i = 1, $c = count($array_s); $i < $c; ++$i) {

	$result2 *= $array_s[$i];
	}
echo "<l>Multiplication of elements: </l>" . $result2;
echo "<br>";
echo "<l>Multiplication of elements (function): </l>" .array_product($array_s);


//9
echo "<br>";
echo "<br>";

$repeat = [4, 7, 5, 3, 4, 2, 9, 4, 2, 1, 4, 3];
print_r (array_count_values($repeat));



?>