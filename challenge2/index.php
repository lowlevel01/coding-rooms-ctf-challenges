<?php
include("flag.php");
class User {

	var $name;
	var $challenge;
	var $attempt;
}
try{
$incoming_user = unserialize(hex2bin($_COOKIE["user"]));
if($incoming_user){
	if($incoming_user->name == "admin"){
		$incoming_user->challenge = rand(1,100000);
		if($incoming_user->challenge == $incoming_user->attempt){
			echo "<h1>You're authenticated</h1>";
			echo "<h2>Here's the flag: ". $flag . "</h2>";
		}else{
			echo "You didn't get it correct.";
		}
	}else{
		echo "You're not admin!";
	}
}else{
	echo "<h1>You're not authenticated</h1>";
}
} 
catch(Exception $e) {
  echo "<h1>You're still no authenticated</h1>";
}

?>
