<?php function longdate($timestamp){
	return date("D d m y",$timestamp);
}
echo longdate(time());
?>