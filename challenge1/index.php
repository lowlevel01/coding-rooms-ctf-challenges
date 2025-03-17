<?php



echo "<h1>Welcome to my image gallery</h1>";

if(isset($_GET["name"]) && isset($_GET["verify"])){

	$name = $_GET["name"];
	$verify = $_GET["verify"];
	$salt = "azertyuiop";

	if($verify == md5($salt.$name)){
		$image = base64_encode(file_get_contents($name));
		echo "<img src='data:image/png;base64,$image' />";
	}else{
	
		echo "Integrity check failed"; 
	}

}else{
	echo "<a href='/?verify=edb78fe9f6cfbb52dd3311085097c7f2&name=img.jpg'>lizard</a>";

}


?>
