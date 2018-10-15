<?php $country_city=["Japan" =>"Tokyo","Mexico" =>"Mexico City", "USA" => "New York","India" => "Mumbai","Korea" => "Seoul","China"=>"Shanghai","Nigeria"=>"Lagos"];
$country_city["Argentina"] ="Buenos Aires";
$country_city["China"] ="Beijing";
foreach ($country_city as $country => $city){
	echo $city . " is in " . $country . "<br>";
}
array_diff($country_city, array("Korea"=> "Seoul"));
?>
<br>
<br>
<?php $fruits =["banana","mango","apple","tomato"];
sort($fruits);
foreach ($fruits as $indiv_fruit){
	echo $indiv_fruit . "<br>";
}
?>
