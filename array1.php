
<?php 
	$tasklist = [
		["task" => "Wake up at 7.", 
		"status" => true],
		["task" => "Eat Breakfast at 710.",
		"status" => true],
		["task" => "Go to class at 8.", 
		"status" => false]
		];
		echo $tasklist[2]["task"];
	$tasklist[3] = ["task" => "Listen to Sir T", "status "=> true];
?>
