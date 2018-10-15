<!-- <?php function print2by3Table(){
	echo "<table border=1>";

	for($i=0; $i < 2; $i++){
		echo "<tr>";
		for ($j=0; $j < 3; $j++){
			echo "<td> Content </td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
print2by3Table();
?> -->
<?php function add($a,$b){
	$sum = $a + $b;
	return $sum;
}
$number1 = 20;
$number2 = 12;

$total = add($number1,$number2);
echo "Total is " . $total;
?>
