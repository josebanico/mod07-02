<?php function square_perimeter($a,$b){
	$square_perimeter = $a + $a + $a + $a;
	return $square_perimeter;
}

	$num1 = 20;
	$num2 = 58;

	$square = square_perimeter($num1, $num2);
	echo " Square Perimeter is " . $square . "<br>";
?>
<?php function square_area($a,$b){
	$square_area = $a * $b;
	return $square_area;
}

	$num1 = 20;
	$num2 = 20;

	$square = square_area($num1, $num2);
	echo " Square area is " . $square . "<br>";
?>
<?php function triangle_perimeter($a,$b,$c){
	$triangle = $a + $b + $c;
	return $triangle;
}

	$num1 = 11;
	$num2 = 12;
	$num3 = 13;

	$triangle = triangle_perimeter($num1, $num2,$num3);
	echo " Triangle Perimeter is " . $triangle . "<br>";
?>
<?php function triangle_area($a,$b,$c){
	$triangle = $a * $b / 2;
	return $triangle;
}

	$num1 = 14;
	$num2 = 16;
	$num3 = 2;

	$triangle = triangle_area($num1, $num2,$num3);
	echo " Triangle area is " . $triangle . "<br>";
?>
<?php function rec_perimeter($a,$b){
	$rec = 2*($a) + 2*($b);
	return $rec;
}

	$num1 = 25;
	$num2 = 15;
	

	$rec = rec_perimeter($num1, $num2);
	echo " Rectangle Perimeter is " . $rec . "<br>";
?>
<?php function rec_area($a,$b){
	$rec = $a * $b;
	return $rec;
}

	$num1 = 25;
	$num2 = 15;


	$rec = rec_area($num1, $num2);
	echo " Rectangle Area is " . $rec . "<br>";
?>
<?php 
function circle_perimeter($b){
	$circle = 2 *(3.14 * $b);
	return $circle;
}
	$num1 = 50;
	
	$circle = circle_perimeter($num1);
	echo " Circle Perimeter is " . $circle . "<br>";
?>
<?php 
function circle_area($b){
	$circle = 3.14 * $b *$b;
	return $circle;
}
	$num1 = 14;
	
	$circle = circle_area($num1);
	echo " Circle Area is " . $circle . "<br>";
?>