<!DOCTYPE HTML>
<HTML>
<HEAD>
<META charset="utf-8">
<TITLE> FIRST FORM!!!
</TITLE>
</HEAD>
<?php
$pin=$_POST['ar'];//Πίνακας επειδή στέλνουμε ar[]
$tz=$_POST['tz']; // Μια μεταβλητή
?>
<style>
td{
	border: 5px solid #fff;
	width:50px;
	height:50px;
}
img{
	
	height:75px;
	width:auto;
	
}
</style>
<BODY>
<?php 
sort($pin);

if (sizeof($pin)!=sizeof(array_unique($pin))){
	
	echo "Έδωσες ίδια στοιχεία. Παρακαλώ δοκίμασε <a href='form.html'>[ξανά]</a>";
}
else{
	
do{ // klir {1,13,14,15,17}
$klir=array(rand(1,45),rand(1,45),rand(1,45),rand(1,45),rand(1,45));
$tz2=rand(1,20);
}while(sizeof($klir)!=sizeof(array_unique($klir)));	
sort($klir);	

echo "<table border='1'><tr>";
for($i=0;$i<sizeof($pin);$i++){
	echo "<td>".$pin[$i]."</td>";
}
	echo "<td style='background-color:grey'>".$tz."</td>";
	echo "</tr></table>";

echo "</br>";

echo "<table border='1'><tr>";
for($i=0;$i<sizeof($klir);$i++){
	echo "<td>".$klir[$i]."</td>";
}
	echo "<td style='background-color:grey'>".$tz2."</td>";
	echo "</tr></table>";

	/*$x=0;
	for($i=0;$i<sizeof($pin);$i++){
		for($j=0;$j<sizeof($klir);$j++){
			if($pin[$i]==$klir[$j])
				$x++;
		}
	} */
	
	$x=sizeof(array_intersect($pin,$klir));
	$y=0;
	if($tz==$tz2)
		$y=1;
	
	echo "Έπιασες ".$x."+".$y."</br>";
	
	if($x==5 && $y==1)
		echo "Κέρδισες 1500000€";
	else if($x==5)
		echo "Κέρδισες 150000€";
	else if($x==4 && $y==1)
		echo "Κέρδισες 2500€";
	else if($x==4)
		echo "Κέρδισες 50€";
	else if($x==3 && $y==1)
		echo "Κέρδισες 50€";
	else if($x==3)
		echo "Κέρδισες 2.5€";
	else if($x==2 && $y==1)
		echo "Κέρδισες 2.5€";
	else if($x==1 && $y==1)
		echo "Κέρδισες 1.5€";
	else 
		echo "<img src='http://files.poli-kouvades.webnode.gr/200000001-4f0f25008e/1779352_473361766106615_1007721685_n.jpg' />";
}



?>

