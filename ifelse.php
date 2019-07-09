<!DOCTYPE html>
<html lang="en">
<head>

	<title>Ifelse statment</title>
</head>
<body>
	<?php
	$t = date("l");

	$days =array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

	if ($t==$days[0]){
		echo "Pizza";
	}

	elseif ($t==$days[1]) {
		echo "Burger king";
	}
	elseif ($t==$days[2]) {
		echo "Qorma";
	}
	elseif ($t==$days[3]) {
		echo "Mutton";
	}
	elseif ($t==$days[4]) {
		echo "Ptato";
	}
	elseif ($t==$days[5]) {
		echo "ladyfinger";
	}

	else {
		echo "Biryani";
	}
	echo "<br>";
	echo "<br>";
	?>

	<?php
	$day = date("l");

	if ($day=="Monday"){
		echo "Mutton";
	}

	elseif ($day=="Tuesday") {
		echo "Chicken";
	}

	elseif ($day=="Wednesday") {
		echo "ladyfinger";
	}

	elseif ($day=="Thursday") {
		echo "Beef";
	}

	elseif ($day=="Friday") {
		echo "Pickle Meat";
	}

	elseif ($day=="Saturday") {
		echo "Gram";
	}

	elseif ($day=="Sunday") {
		echo "Rice";
	}
	?>
</body>
</html>