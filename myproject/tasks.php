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

$z = 0;

for ($x = 1; $x <=112; $x += 3){
	$z += $x;
}
echo " $z";
echo "<br>";
// 3

$q = 0;
$w = 3;

while ( $q <= 10000 ) {
	if ( $q % 5 == 0 ){
		echo "$q";
		//$r = strripos($q, $w);
		//echo " $q";
	}
}





?>