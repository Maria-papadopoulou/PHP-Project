<!DOCTYPE HTML>
<HTML>
<HEAD>
<META charset="utf-8">
<TITLE> FIRST FORM!!!
</TITLE>
</HEAD>
<?php
$pin=$_POST['ar'];
$lck=$_POST['lck']; 
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
sort($lck);
if (sizeof($pin)!=sizeof(array_unique($pin)) || sizeof($lck)!=sizeof(array_unique($lck))){
	
	echo "Έδωσες ίδια στοιχεία. Παρακαλώ δοκίμασε <a href='form.html'>[ξανά]</a>";
}
else{
	
do{ // klir {1,13,14,15,17}
$klir=array(rand(1,15),rand(1,15),rand(1,15));
$lck2=array(rand(1,5),rand(1,5));
}while(sizeof($klir)!=sizeof(array_unique($klir)) || sizeof($lck2)!=sizeof(array_unique($lck2)));	
sort($klir);
sort($lck2);	

echo "<table border='1'><tr>";
for($i=0;$i<sizeof($pin);$i++){
	echo "<td>".$pin[$i]."</td>";
}
	echo "<td style='background-color:grey'>".$lck[0]."</td>";
	echo "<td style='background-color:grey'>".$lck[1]."</td>";
	echo "</tr></table>";

echo "</br>";

echo "<table border='1'><tr>";
for($i=0;$i<sizeof($klir);$i++){
	echo "<td>".$klir[$i]."</td>";
}
	echo "<td style='background-color:grey'>".$lck2[0]."</td>";
	echo "<td style='background-color:grey'>".$lck2[1]."</td>";
	echo "</tr></table>";

echo "</br>";
	/*$x=0;
	for($i=0;$i<sizeof($pin);$i++){
		for($j=0;$j<sizeof($klir);$j++){
			if($pin[$i]==$klir[$j])
				$x++;
		}
	} */
	
	$x=sizeof(array_intersect($pin,$klir));
	$y=sizeof(array_intersect($lck,$lck2));
	
	
	echo "Έπιασες ".$x."+".$y."</br>";
	
	if($x==3 && $y==2)
		echo "Κέρδισες 5000€";
	else if($x==3 && $y==1)
		echo "Κέρδισες 2500€";
	else if($x==3)
		echo "Κέρδισες 1500€";
	else if($x==2 && $y==2)
		echo "Κέρδισες 50€";
	else if($x==2 && $y==1)
		echo "Κέρδισες 50€";
	else if($x==1 && $y==1)
		echo "Κέρδισες 1.5€";
	else 
		echo "<img src='http://files.poli-kouvades.webnode.gr/200000001-4f0f25008e/1779352_473361766106615_1007721685_n.jpg' />";
}



?>

