<?php
class Car{
	public $camp;
	public $color = "beige";
	public $hasSunRoof = true;

	public function hello(){
		return "beep";
	}
}

$foxy = new Car();
$jaguar = new Car();

echo $foxy->color;
echo "<br>";
echo $jaguar->color;
echo "<br>";
echo $foxy-> color ="blue";
echo "<br>";
echo $jaguar-> color = "red";
echo $foxy-> color = "blue";
echo "<br/>";
echo $foxy ->hello();
echo "<br />";
echo  $jaguar-> hello();
?>