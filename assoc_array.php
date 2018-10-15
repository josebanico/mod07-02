
<?php $yourself = ["name" => "Jose", "age" => "33", "occupation" => "HR", "gender" => "male", "status" => "404"];
foreach ($yourself as $key => $value){
	if ($key == "age"){
		echo $key . ": " . $value . "years old<br>";
	}else{
			echo $key . ": " . $value . "<br>";	
	}

}
$fruits = ["apple","orange","grape"];
	foreach($fruits as $indiv_fruit){
		echo $indiv_fruit . "<br>";
	}
	foreach ($fruits as $fruit_number => $indiv_fruit){
		echo "Index of " . $indiv_fruit . "is" .$fruit_number . "<br>";
	}
?>

