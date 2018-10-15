<?php 
	$tasklist = [
		["task" => "Wake up at 7.", 
		"status" => false],
		["task" => "Eat Breakfast at 710.",
		"status" => false],
		["task" => "Go to class at 8.", 
		"status" => false],
		["task" => "Learn to code.", 
		"status" => false]
		];
		?>
<ul>
	<li><?php echo $tasklist[0]["task"]?></li>
	<li><?php echo $tasklist[1]["task"]?></li>
	<li><?php echo $tasklist[2]["task"]?></li>
	<li><?php echo $tasklist[3]["task"]?></li>
</ul>

<ul>
	<?php 
	foreach($tasklist as $task_item
		?>
</ul>