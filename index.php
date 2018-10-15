
<?php $araw =array ("Lunes","Martes","Miyerkules","Huwebes","Biyernes","Sabado","Linggo");
	for ($i= 0; $i < count($araw); $i++){
		if ($araw[$i] == "Lunes"){
			echo "nang tayo'y magkakilala <br>";
		}
		elseif($araw[$i] == "Martes"){
			echo "nang tayo'y muling magkita <br>";
		}
		elseif($araw[$i] == "Miyerkules"){
			echo "nang magtapat ka ng iyong pagibig <br>";
		}
		elseif($araw[$i] == "Huwebes"){
			echo "nang tayo'y muling magkita <br>";
		}
		elseif($araw[$i] == "Biyernes"){
			echo "nang tayo'y muling magkita <br>";
		}
		elseif($araw[$i] == "Sabado"){
			echo "nang tayo'y muling magkita <br>";
		}
				

				 
	}	
?>	

<?php $age=["Peter" => 35, "Ben" => 37, "Joe" => 43];
	echo "Ben's age is " . $age["Ben"];
	echo "Peter's age is " . $age["Peter"];
	$age["Joe"] = 50;

	foreach ($age as $name => $value){
		echo $name . "is aged" . $value . "<br>";
	}
	?>