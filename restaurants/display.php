<?php 
echo "name= ".$_POST['uname']."<br>";
echo "<br> menu selected are ";
$mySelected=$_POST['d'];

echo "<br>You chose:<br>\n";
foreach ($mySelected as $item)
	echo $item."<br>\n";

echo "<br>QUANTITY ".$_POST['q']."<br>";
echo "<br> ice flovours are  ".$_POST['name1']."<br> TOPPINGS";
echo $_POST['dry']."   ";
echo $_POST['nuts'];
echo "<br>QUANTITY ".$_POST['ice'];
?>
